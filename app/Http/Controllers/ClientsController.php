<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;

class ClientsController extends Controller {

  public function getClients(Request $request) {
    $clients = Clients::all();

    return $clients;
  }

  public function storeClient(Request $request) {
    $client = new Clients();
    $client->name = $request->name;
    $client->cityCode = $request->cityCode;
    $client->save();

    return $client;
  }

  public function deleteClient(Request $request){
    $client = Clients::find($request->id)->delete();
  }

  public  function editClient(Request $request, $id){
    $client = Clients::where('id',$id)->first();

    $client->name = $request->get('name');
    $client->cityCode = $request->get('cityCode');
    $client->save();

    return $client;
  }

}
