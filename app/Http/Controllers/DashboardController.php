<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\str;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $products = Product::limit(10)->get();

        $product_count = count($products);
        $order_count = count($orders);

        foreach ($products as $product) {
            $productName = $product->name;
            $productDescription = $product->description;

            if (strlen($productName) > 25) {
                $product->name = substr($productName, 0, 27) . ' ...';
            }

            if (strlen($productDescription) > 50) {
                $product->description = substr($productDescription, 0, 47) . ' ...';
            }
        }

        foreach ($orders as $order) {
            $orderID = $order->id;

            if ($orderID < 10) {
                $order->id = 'ORDER0' . $orderID;
                $order->custom_id = 'ORDER0' . $orderID;
            }
            else {
                $order->id = 'ORDER' . $order;
                $order->custom_id = 'ORDER' . $order;
            }
        }

        return view('Backend.Dashboard.index', [
            'order_count' => $order_count,
            'product_count' => $product_count,
            'products' => $products,
            'orders' => $orders
        ]);
    }
}
