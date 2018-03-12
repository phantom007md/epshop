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
        return $products = Product::all();
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
            'user_id' => $request->user_id,
        ]);
    }


    public function show(Product $product)
    {
        return $product;
    }


    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->body = $request->body;
        $product->img = $request->img;
        $product->guaranty_id = $request->guaranty_id;
        $product->user_id = $request->user_id;
        $product->save();
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);
    }
}
