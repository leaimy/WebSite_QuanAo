<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use Auth;
use Illuminate\Http\Request;

class ClientCustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('Backend.Customer.index', [
            'customers' => $customers,
        ]);
    }

    public function show(Customer $customer)
    {
        $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
        $websiteconfig = \App\Website::all();
        $orders = Order::where('customer_id', $customer->id)->get();
        $customer = Auth::guard("customer")->user();
        return view('Frontend.Home.my-profile', [
            'websiteconfig' => $websiteconfig,
            'parent_categories' => $parent_categories,
            'customer' => $customer,
            'orders' => $orders,
            'customer' => $customer
        ]);
    }

    public function create()
    {
        $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
        $websiteconfig = \App\Website::all();

        return view('Frontend.Home.signup', [
            'websiteconfig' => $websiteconfig,
            'parent_categories' => $parent_categories,
        ]);
    }

    public function store(Request $request)
    {
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $phone_number = $request->get('phone_number');
        $province = $request->get('province');
        $district = $request->get('district');
        $village = $request->get('village');
        $street = $request->get('street');
        $username = $request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');

        $password = \Hash::make($password);

        Customer::create([
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone_number' => $phone_number,
            'province' => $province,
            'district' => $district,
            'village' => $village,
            'street' => $street
        ]);

        return redirect()->route('frontend.index');
    }

    public function edit(Customer $customer)
    {
        $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
        $websiteconfig = \App\Website::all();
        $orders = Order::where('customer_id', $customer->id)->get();
        $customer = Auth::guard("customer")->user();

        return view('Frontend.Home.cap-nhat-ho-so', [
            'websiteconfig' => $websiteconfig,
            'parent_categories' => $parent_categories,
            'orders' => $orders,
            'customer' => $customer
        ]);
    }

    public function update(Request $request, Customer $customer)
    {
        $email = $request->get('email');
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');


        $update_array = [
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name
        ];


        if ($request->has('password')) {
            $password = $request->get('password');

            if ($password != null)
                $update_array['password'] = $password;
        }


        $customer->update($update_array);

        return redirect()->route('thongtincanhan');
    }



    public function thongtindonhang()
    {
        $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
        $websiteconfig = \App\Website::all();
        $customer = Auth::guard('customer')->user();
        $orders = Order::where('customer_id', $customer->id)->get();


        return view('Frontend.Home.my-order', [
            'websiteconfig' => $websiteconfig,
            'parent_categories' => $parent_categories,
            'customer'=>$customer,
            'orders'=>$orders,
        ]);
    }
}
