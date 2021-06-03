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
        $newOrdersCount = OrderHelpers::countNewOrders($orders);

        return view('Backend.Order.index', [
            'orders' => $orders,
            'new_order_counts' => $newOrdersCount
        ]);
    }
}
