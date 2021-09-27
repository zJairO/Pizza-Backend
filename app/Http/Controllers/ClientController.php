<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function show($client)
    {
        return Client::find($client);
    }

    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return response()->json($client, 201);
    }

    public function search($phone) {
        if (Client::where('phone', $phone)->exists()) {
            $client = Client::where('phone', $phone)->get();
            return response()->json($client, 200);
          } else {
            return response()->json([
              "message" => "Client not found"
            ], 404);
          }
      }
}
