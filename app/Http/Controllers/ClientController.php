<?php

// namespace App\Http\Controllers;

// use App\Models\Client;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

// class ClientController extends Controller
// {
//     //
//     public function index(){
//         $clients = Client::all();

//         if($clients->isEmpty()){
//             $data = [
//                 'message' => 'No hay clientes',
//                 'status' => 200,
//                 'clients' => []
//             ];
//             return response()->json($data, 200);
//         }
//         $data = [
//             'clients' => $clients,
//             'status' => 200
//         ];
//         return response()->json($data, 200);
//     }

//     public function store(Request $request) {
//         $data = $request->all();
//         $validator = Validator::make($request->all(),[
//             'name' => 'required',
//             'dni' => 'required',
//             'email' => 'required',
//             'phone' => 'required',
//             'address' => 'required'
//         ]);
//         if($validator->fails()){
//             $data = [
//                 'message' => 'Error en la validación de datos',
//                 'erros' => $validator->errors(),
//                 'status' => 400
//             ];
//             return response()->json($data, 400);
//         }

//         $client = $this->create($data);
//         if(!$client){
//             $data = [
//                 'message' => 'Error al registrar Cliente',
//                 'status' => 500
//             ];
//             return response()->json($data, 500);
//         }
//         $data = [
//             'message' => 'Pelicula creada.',
//             'client' => $client,
//             'status' => 201
//         ];
//         return response()->json($data, 201);
//     }

//     public function create(array $data){
//         return Client::create([
//             'name' => $data['name'],
//             'dni' => $data['dni'],
//             'email' => $data['email'],
//             'phone' => $data['phone'],
//             'address' => $data['address']
//         ]);
//     }

//     public function show($id){
//         $client = Client::find($id);
//         if(!$client){
//             $data = [
//                 'message' => 'Cliente no encontrado',
//                 'status' => 404
//             ];
//             return response()->json($data, 404);
//         }
//         $data = [
//             'client' => $client,
//             'status' => 200
//         ];
//         return response()->json($data, 200);
//     }

//     public function destroy($id){
//         $client = Client::find($id);
//         if(!$client){
//             $data = [
//                 'message' => 'Cliente no encontrado',
//                 'status' => 404
//             ];
//             return response()->json($data, 404);
//         }
//         $client->delete();
//         $data = [
//             'message' => 'Cliente eliminado',
//             'status' => 404
//         ];
//         return response()->json($data, 200);
//     }

//     public function update(Request $request, $id) {

//         $client = Client::find($id);

//         if(!$client){
//             $data = [
//                 'message' => 'Cliente no encontrado',
//                 'status' => 404
//             ];
//             return response()->json($data, 404);
//         }



//         $validator = Validator::make($request->all(),[
//             'name' => 'required|unique:pelicula',
//             'dni' => 'required|unique:client|min:8',
//             'email' => 'required|unique',
//             'phone' => 'required|min:6',
//             'address' => 'required'
//         ]);



//         if($validator->fails()){
//             $data = [
//                 'message' => 'Error en la validación de datos',
//                 'erros' => $validator->errors(),
//                 'status' => 400
//             ];
//             return response()->json($data, 400);
//         }

//         $client->name = $request->name;
//         $client->dni = $request->dni;
//         $client->email = $request->email;
//         $client->phone = $request->phone;
//         $client->address = $request->address;

//         $client->save();

//         $data = [
//             'message' => 'Pelicula actualizada.',
//             'client' => $client,
//             'status' => 200
//         ];
//         return response()->json($data, 200);
//     }

    
// }
