<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function products()
    {
        $products = Product::with("categories")->latest()->get();
        $categories = Category::get();

        return view('backend.products', compact('products', 'categories'));
    }
    function editProducts($id)
    {
        $products = Product::latest()->get();
        $editedProducts = Product::with('categories:id')->find($id);
        $categories = Category::get();
        // dd($editedProducts->categories->pluck('id')->toArray());
        return view('backend.products', compact('products', 'editedProducts', 'categories'));
    }
    function deleteProducts($id)
    {
        Product::find($id)->delete();
        return back();
    }

    function saveProducts(Request $req, $id = null)
    {


        $req->validate([
            'name' => 'required|unique:products,name,' . $id,
            'price' => 'required',
            'details' => 'required'
        ]);


        $products = Product::findOrNew($id);
        $products->name = $req->name;
        $products->price = $req->price;
        $products->detials = $req->details;
        if ($req->hasFile('image')) {
            $fileName = $req->image->store('products',  'public');
            $products->image = $fileName;
        }
        $products->save();
        $products->categories()->sync($req->categories);
        return back();
    }
}
