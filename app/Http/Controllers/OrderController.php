<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderHelpers;
use App\OrderNote;
use App\OrderStatus;
use App\ProductDetail;
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

    public function storeFromWeb(Request $request)
    {
        $productIDs = $request->get('product_ids');
        $modelIDs = $request->get('model_ids');
        $customerID = $request->get('customer_id');
        $orderStatus = $request->get('current_status');
        $orderOption = $request->get('order_option');
        $totalPrice = $request->get('total_price');

        $newOrder = \App\Order::create([
            'customer_id' => $customerID,
            'total_price' => $totalPrice,
            'discount_percent' => 0,
            'current_status' => $orderStatus,
            'order_option' => $orderOption
        ]);

        $newOrderID = $newOrder->id;

        foreach ($modelIDs as $modelID) {
            list($id, $quantity) = explode('_', $modelID);

            \App\OrderDetail::create([
                'order_id' => $newOrderID,
                'product_detail_id' => $id,
                'quantity' => $quantity
            ]);

            $model = ProductDetail::find($modelID);
            $model->quantity -= $quantity;
            $model->save();
        }

        $customer = Customer::find($customerID);

        OrderNote::create([
            'order_id' => $newOrderID,
            'user_id' => 0,
            'order_status' => OrderStatus::$NEW_WEB_ORDER,
            'note' => 'Đơn hàng mới được tạo bởi khách hàng: ' . $customer->name
        ]);

        return redirect()->route('frontend.index');
    }

    public function storeFromUser(Request $request)
    {
        return redirect()->route('Order.index');
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
