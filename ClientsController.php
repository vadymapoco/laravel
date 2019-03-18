<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    public function get_planname($uid){
    	$plan_name = Client::where('fire_id',  '=', $uid)->select('plan_name')->get();

    	return $plan_name;
    }

    public function get_clients() {
    	$clients = Client::all();
    	return $clients;
    }

    public function get_clientbyid($id) {
    	$client = Client::where('id_client', '=', $id)->get();
    	return $client;
    }
}
