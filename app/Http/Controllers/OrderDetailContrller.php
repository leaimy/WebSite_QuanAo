<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\OrderNote;
use App\Product;
use App\ProductDetail;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Int_;

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

        $orderNotes = OrderNote::where('order_id', $orderID)->get();

        foreach ($orderNotes as $note) {
            $userId = $note['user_id'];

            $timestamp = $note['created_at'];
            $dateFormat = new \DateTime($timestamp);

            $note['day'] = $dateFormat->format('d');
            $note['month'] = $dateFormat->format('M');
            $note['year'] = $dateFormat->format('Y');
            $note['hour'] = intval($dateFormat->format('H')) + 7;
            $note['minute'] = $dateFormat->format('i');
            $note['second'] = $dateFormat->format('s');

            if ($userId != 0) {
                $note['user'] = User::find($userId);
            }
        }

        return view('Backend.Order.Detail.index', [
            'orderDetails' => $orderDetails,
            'order_id' => $orderID,
            'orderNotes' => $orderNotes
        ]);
    }
}
