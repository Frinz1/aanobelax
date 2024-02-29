<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\featured;
use App\Models\Product;

use App\Models\Bookmark;




class HomeController extends Controller
{

    public function index()
    {
    
        $product=Product::all();
   
        

        return view('home.userpage',compact('product'));
    }

    public function bookmark()
    {   
        $id = Auth::user()->id;
        $bookmarks = Bookmark::where('user_id', $id)->get();
        
        // Eager load the product for each bookmark
        $bookmarks->load('product');
        
        return view('home.bookmark', compact('bookmarks'));
    }
    public function remove_bookmark($id)
    {
        $bookmark=Bookmark::find($id);

        $bookmark->delete();
        
        return redirect()->back();

    }
    public function read_bookmark($id)
    {
        $product=product::find($id);
           
 
            
        return view('home.product_wrote',compact('product'));
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function aboutus()
    {
        return view('home.aboutus');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='admin')
        {
            return view('admin.home');
        }

        else
        {
            $product=Product::all();
            return view('home.userpage',compact('product'));
        }
    }
        public function product_details($id)
        {
            $product=product::find($id);
           
 
            
            return view('home.product_details',compact('product'));
        }

    public function  add_bookmark(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $product=product::find($id);
            $bookmark=new bookmark;

            $bookmark->name=$user->name;
            $bookmark->email=$user->email;
            $bookmark->user_id=$user->id;

            $bookmark->product_title=$product->title;
            $bookmark->image=$product->image;
            $bookmark->product_id=$product->id;

            $bookmark->save();

            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }
    public function popular_wrote($id)
        {
            $product=product::find($id);
            
            return view('home.popular_wrote',compact('product'));
        }
  
   
}