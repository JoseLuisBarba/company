<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use App\Models\Client;
class CatalogueClientController extends Controller
{
    //
    private $clientController;

    public function __construct(ClientController $clientController)
    {
        $this->clientController = $clientController;
    }
    public function index(){
        $clientsResponse = $this->clientController->index();
        $clients = $clientsResponse->getData()->clients;
        return  view('company.clientes.clientes')->with("clients",$clients);
    }

    public function add(Request $req) {
        $this->clientController->store($req);
        return redirect()->back();
    }

    public function edit(Request $req){
        $clientResponse = $this->clientController->show($req->id);
        $client = $clientResponse->getData()->film;
        return view('edit')->with("client",$client);
    }

    public function update(Request $req, $id){
        $clientResponse = $this->clientController->update($req,$id);
        return redirect()->back();
    }

    public function delete($id){
        $this->clientController->destroy($id);
        return redirect()->back();
    }

    
}
