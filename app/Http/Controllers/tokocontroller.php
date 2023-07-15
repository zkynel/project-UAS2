<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class tokocontroller extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('toko/index', compact('products'));
    }

    public function detail(){
        return view('toko/detail');
    }
    
    public function about(){
        return view('toko/about');
    }

    public function produk()
    {
        $products = Product::all();

        return view('toko.produk', compact('products'));
    }
        
    public function admin(){
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }

    public function create(){
        return view('toko/create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('product.admin')->with('success','Product created successfully');
        
    }

    public function edit(Product $product){
        return view('toko/edit', compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.admin')->with('success', 'Product deleted successfully');
    }

    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);


        $product->update($request->all());
        return redirect()->route('product.admin')->with('success', 'Product updated successfully');
    }

    public function customers()
    {
        $customers = Customer::all();
        return view('toko/customers', compact('customers'));
    }

    public function AddCustomer()
    {
        return view('toko/addcustomer');
    }

    public function NewCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('produk.customers')->with('success', 'Product created successfully');
    }
}
