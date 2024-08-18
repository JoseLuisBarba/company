<?php

namespace App\Http\Controllers;

use App\Events\ServicioSaved;
use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Contracts\View\View;
use App\Http\Requests\CreateServicioRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PersonasController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        //
        $personas = Persona::get();
        return view('personas',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        //
        return view('personasCreate', [
            'persona' => new Persona
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateServicioRequest $request)
    {
        $persona = new Persona($request->validated());

        $persona->image = $request->file('image')->store('images');
        $persona->save();

        $image = Image::make(Storage::get($persona->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();
                
        Storage::put($persona->image, (string) $image);
        ServicioSaved::dispatch($persona);

        return redirect()->route('personas.index')->with(
            'estado', 'La personsa fue creada corrextamente'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        //
        return view('personasShow',[
            'persona' => Persona::find($id)
        ]);
    }

    public function edit(Persona  $persona)
    {
        //
        return view('personasEdit', [
            'persona' =>  $persona
        ]);
    }
    /**
     * Store a newly created resource in storage.
     * @param  Persona  $persona
     * @param CreateServicioRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Persona  $persona, CreateServicioRequest $request)
    {
        //
        if($request->hasFile('image')) {
            Storage::delete( $request->image);
            $persona->fill( $request->validated() );
            $persona->image = $request->file('image')->store('images');
            $persona->save();

            $image = Image::make(Storage::get($persona->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();

            Storage::put($persona->image, (string) $image);
            ServicioSaved::dispatch($persona);
        }
        else{
            $persona->update( array_filter( $request->validated() ) );
        }

        $persona->update( array_filter( $request->validated() ) );
        return redirect()->route('personas.show',  $persona)->with(
            'estado', 'La persona fue actualizada correctamente'
        );
    }

     /**
     * Destroy resource.
     * @param  Persona  $persona
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Persona $persona)
    {
        //
        if($persona->image){
            Storage::delete($persona->image);
        }
       
        $persona->delete();
        return redirect()->route('personas.index')->with(
            'estado', 'La persona fue eliminada correctamente'
        );;
    }
}
