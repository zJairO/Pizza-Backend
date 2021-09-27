<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderStatus;


class OrderStatusController extends Controller
{
    public function index() {
        return OrderStatus::all();
    }

    public function show(OrderStatus $order_status) {
        return $order_status;
    }
}
