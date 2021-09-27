<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        return Pizza::all();
    }
 
    public function show($pizza)
    {
        return Pizza::find($pizza);
    }

    public function store(Request $request)
    {
        $pizza = Pizza::create($request->all());
        return response()->json($pizza, 201);
    }

}
