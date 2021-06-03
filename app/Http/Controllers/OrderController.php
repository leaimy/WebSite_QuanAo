<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderHelpers;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('Backend.Order.index', [
            'orders' => $orders,
        ]);
    }
}
