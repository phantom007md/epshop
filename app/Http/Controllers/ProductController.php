<?php

namespace App\Http\Controllers;

use App\Guaranty;
use App\Admin;
use App\Product;
use function compact;
use Illuminate\Http\Request;
use function redirect;
use function view;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $products;
//        return view('products.index', compact('products'));
    }

    public function create()
    {
        $guaranties = Guaranty::all();
        $admins= Admin::all();
        return view('products.create', compact('guaranties', 'admins'));
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'body' => $request->body,
            'type' => $request->type,
            'price' => $request->price,
            'img' => $request->img,
            'guaranty_id' => $request->guaranty_id,
            'admin_id' => $request->admin_id,
        ]);

        return redirect()->route('home');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('home');
    }
}
