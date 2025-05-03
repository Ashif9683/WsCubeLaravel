<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use function PHPUnit\Framework\returnArgument;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $url = route('store');  // customers directory name of customer blade file
        $title = "Customer Registration";
        $data = compact('url', 'title');
        return view('customers.customer')->with($data);
    }

    public function store(Request $request)
    {
        logger("Request Data: " . json_encode($request->all()));  // Log request data

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:5',
            'confirmed_password' => 'required|min:5|same:password',
            'city' => 'required',
            'state' => 'required',
            'gender' => 'required|in:M,F,O',
            'dob' => 'required',
        ]);

        $customer = Customer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => md5($request['password']),
            'state' => $request['state'],
            'city' => $request['city'],
            'address' => $request['address'],
            'gender' => $request['gender'], // Store the gender correctly
            'dob' => $request['dob'],
        ]);
        return redirect('/customer/viewData')->with('status', 'Customer data saved successfully!');
    }

    public function viewData()
    {

        $customers = Customer::all();
        $data = compact('customers');
        return view('customers.customerView')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect()->route('customer.viewData')->with('status', 'Customer deleted successfully!');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect()->route('customer.viewData');
        } else {
            $url = url('customer/update') . '/' . $id;
            $title = 'Update Customer Data';
            $data = compact('customer', 'url', 'title');
            return view('customers.customer')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'gender' => 'required|in:M,F,O',
            'dob' => 'required',
        ]);

        $customer->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
        ]);

        return redirect()->route('customer.viewData')->with('status', 'Customer Updated successfully!');
    }

}
