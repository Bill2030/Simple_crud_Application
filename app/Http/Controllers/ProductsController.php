<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProductRequest;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact("products"));
    }

    public function create()
    {
        return view("products.create");
    }

    public function store(SaveProductRequest $request)
    {
        // $products = new Product();
        // $products->name = $request->name;
        // $products->description = $request->description;
        // $products->prize = $request->prize;
        // $products->save();
        
        $product = Product::create($request->validated());

        return redirect()->route("products.show", $product)->with("status","product Created");
       
    }
    public function show( Product $product )
    {
       
        return view("products.show", compact("product"));
    }

    

    public function edit( Product $product )
    {
        return view("products.edit", compact("product"));
    }

    public function update(SaveProductRequest $request, Product $product )
    {
            $product->update($request->validated());

            return redirect()->route("products.show", $product)->with("status","Product Updated");
    }

    public function destroy( Product $product )
    {
        $product->delete();

        return redirect()->route("products.index")->with("status","Product Deleted");
    }
}
