<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('produk.customers')->with('success', 'Customer created successfully');
    }

    public function customers()
    {
        $customers = Customer::all();
        return view('toko/customers', compact('customers'));
    }

    public function edit(Customer $customer)
    {
        return view('toko/editcustomers', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        $customer->update($request->all());
        return redirect()->route('produk.customers')->with('success', 'Customer updated successfully');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('produk.customers')->with('success', 'Customer deleted successfully');
    }




}
