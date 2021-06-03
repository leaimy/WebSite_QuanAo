<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;

class OrderDetailContrller extends Controller
{
    public function show(Request $request, Order $order) {
        $orderID = $order->id;

        $orderDetails = OrderDetail::where('order_id', $orderID)->get();

        foreach ($orderDetails as $detail) {
            $modelID = $detail['product_detail_id'];

            $detail['model'] = ProductDetail::find($modelID);
            $detail['product'] = Product::find($detail['model']['product_id']);
        }

        return view('Backend.Order.Detail.index', [
            'orderDetails' => $orderDetails,
            'order_id' => $orderID
        ]);
    }
}
