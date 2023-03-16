<?php

namespace App\Http\Controllers;

// Product Model
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Read all products
        return Product::all(); // SELECT * FROM products;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // กำหนดตัวแปรรับค่าจากฟอร์ม
        $data_product = array(
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'price' => $request->input('price'),
            'user_id' => $request->input('user_id')
        );

        return Product::create($data_product);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data_product = array(
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'price' => $request->input('price')
        );

        $product = Product::find($id);
        $product->update($data_product);

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Product::destroy($id);
    }
}
