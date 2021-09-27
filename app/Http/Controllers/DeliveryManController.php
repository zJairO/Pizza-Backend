<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryMan;

class DeliveryManController extends Controller
{
    public function index() {
        return DeliveryMan::all();
    }

    public function show(DeliveryMan $delivery_man) {
        return $delivery_man;
    }
}
