<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function home() {
        $products = Product::latest()->take(12)->get();
        $featuredProducts = $products->where('featured',true);
        
        return view('homepage', compact('featuredProducts', 'products'));
    }

    function productShow($id) {
        $product = Product::findOrFail($id);
        // return view('', compact('product'));
    }


    function contactus()
    {

        return view('contactus');
    }
    function aboutus()
    {

        return view('aboutus');
    }
    function userProfile()
    {
        return view('frontend.userProfile');
    }


    function categoryArcheive($id) {
        $products = Product::whereHas('categories', function($query) use ($id){
            $query->where('category_id', $id);
        })->get();
        $category  = Category::find($id,['id','title']);
        
        return view('frontend.CategoryArcheive', compact('products', 'category'));   
        
    }

}
