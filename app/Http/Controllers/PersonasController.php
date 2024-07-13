<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Contracts\View\View;
use App\Http\Requests\CreateServicioRequest;

class PersonasController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function store(CreateServicioRequest $request)
    {
        
        Persona::create($request->validated( ));
        return redirect()->route('personas.index');
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

    public function edit(Persona $id)
    {
        //
        return view('personasEdit', [
            'persona' => $id
        ]);
    }

    public function update(Persona $id, CreateServicioRequest $request)
    {
        //
        $id->update($request->validated());
        return redirect()->route('personas.show', $id);
    }


    public function destroy(Persona $persona)
    {
        //
        $persona->delete();
        return redirect()->route('personas.index');
    }
}
