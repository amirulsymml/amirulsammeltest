<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $products = Product::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->get();
        } else {
            $products = Product::all();
        }

        return view('welcome', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('viewproduct', ['product' => $product]);
    }

    public function create()
    {
        return view('createproduct');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->publish = $request->publish;
        $product->save();

        return redirect()->route('welcome');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('editproduct', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->publish = $request->publish;
        $product->save();

        return redirect()->route('welcome');
    }
}
