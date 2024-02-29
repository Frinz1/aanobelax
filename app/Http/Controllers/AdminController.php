<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\featured;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();

        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data=new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','Category Added Successfully');
    }
    
    public function delete_category($id)
{
    $data = category::find($id);

    if ($data) {
        $data->delete();    
        return redirect()->back()->with('message','Category Deleted Successfully');
    } else {
  
        return redirect()->back()->with('error', 'Record not found');
    }
}
    public function view_product()
    {
        $category=category::all();
        return view('admin.product',compact('category'));
    }
    
    public function add_product(Request $request)
    {
        $product=new product;

        $product->title=$request->title;
        $product->description=$request->description;
        
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('products',$imagename);
        $product->image=$imagename;
        
        $product->rating=$request->rating;
        $product->genre=$request->genre;
        $product->body=$request->body;
        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }
    public function delete_product($id)
    {
        $product=product::find($id);
        
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');

    }
    public function update_product($id)
    {
        $product=product::find($id);

        $category=category::all();

        return view('admin.update_product',compact('product','category'));
    }
    public function update_product_confirm(Request $request, $id)
    {
        $product=product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('products',$imagename);
        $product->image=$imagename;
        $product->rating=$request->rating;
        $product->genre=$request->genre;
        $product->body=$request->body;

        $product-> save();

        return redirect()->back()->with('message','Product Deleted Successfully');
    }
  
}