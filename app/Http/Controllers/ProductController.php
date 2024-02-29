<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Bookmark;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|numeric|min:1|max:5',
            'genre' => 'required',
            'body' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->rating = $request->rating;
        $product->genre = $request->genre;
        $product->body = $request->body;
        $product->save();

        return response()->json(['message' => 'Product added successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'genre' => 'required',
            'body' => 'required',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->title = $request->title;
        $product->description = $request->description;
        $product->rating = $request->rating;
        $product->genre = $request->genre;
        $product->body = $request->body;
        $product->save();

        return response()->json(['message' => 'Product updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
    public function edit(string $id)
{
    $product = Product::findOrFail($id);
    return response()->json($product);
}
}