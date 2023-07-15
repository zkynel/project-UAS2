<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();

        return view('product.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product.show', compact('product'));
    }


    public function buy(Request $request, $id)
    {

        $product = Product::findOrFail($id);
 
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        return redirect()->route('product.thankyou');
    }

}


