<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function index() {
        return Ingredient::all();
    }

    public function show(Ingredient $ingredient) {
        return $ingredient;
    }
}
