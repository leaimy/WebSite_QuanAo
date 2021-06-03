<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailContrller extends Controller
{
    public function show(Request $request, Order $order) {
        $orderID = $order->id;

        $orderDetails = OrderDetail::where('order_id', $orderID)->get();

        return view('Backend.Order.Detail.index', [
            'orderDetails' => $orderDetails,
            'order_id' => $orderID
        ]);
    }
}
