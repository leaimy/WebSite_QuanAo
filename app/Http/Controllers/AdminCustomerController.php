<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index()
    {

$customers = Customer::all();
        return view('Backend.Customer.index',[
            'customers'=>$customers,
        ]);
    }

    public function show(Customer $customer)
    {
        return view('Backend.Customer.show', [
            'customer' => $customer
        ]);
    }

    public function create()
    {
        return view('Backend.Customer.create');
    }

    public function store(Request $request)
    {


       $first_name = $request->get('first_name');
       $last_name = $request->get('last_name');
       $phone_number = $request->get('phone_number');
       $province = $request->get('province');
       $district = $request->get('district');
       $village = $request->get('village');
       $street = $request ->get('street');
       $username = $request->get('username');
       $email = $request->get('email');
       $password =$request->get('password');

       $password=\Hash::make($password);



        Customer::create([
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone_number'=>$phone_number,
            'province'=>$province,
            'district'=>$district,
            'village'=>$village,
            'street'=>$street
        ]);

        return redirect()->route('AdminCustomer.index');
    }

    public function edit(Customer $customer)
    {
        return view('Backend.Customer.edit', [
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

        if ($request->has('username')) {
            $username = $request->get('username');

            if ($username != null)
                $update_array['username'] = $username;
        }

        if ($request->has('password')) {
            $password = $request->get('password');

            if ($password != null)
                $update_array['password'] = $password;
        }



        $customer->update($update_array);

        return redirect()->route('AdminCustomer.index');
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('AdminCustomer.index');
    }


}
