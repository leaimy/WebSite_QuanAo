<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderHelpers;
use App\OrderNote;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $newOrdersCount = OrderHelpers::countNewOrders($orders);

        $listOfOrders = OrderHelpers::getListOfOrderStatus();

        return view('Backend.Order.index', [
            'orders' => $orders,
            'new_order_counts' => $newOrdersCount,
            'list_of_orders' => $listOfOrders
        ]);
    }

    public function changeStatus(Request $request, Order $order)
    {
        $newOrderStatus = $request->get('new_order_status');
        $newOrderNote = $request->get('new_order_note');

        $userID = \Auth::id();
        $orderID = $order['id'];

        $order->current_status = $newOrderStatus;
        $order->save();

        OrderNote::create([
           'order_id' => $orderID,
           'user_id' => $userID,
           'order_status' => $newOrderStatus,
           'note' => $newOrderNote
        ]);

        return redirect()->route('Order.index');
    }
}
