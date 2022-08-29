<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $category = Category::all();
        $products = Products::all();
        return view('frontend.index', compact('category', 'products'));
    }

    public function view_category($id){
        if ($category = Category::where('id', $id)->exists())

        {
        $category = Category::where('id', $id)->first();
        $products = Products::where('category_name', $category->name)->get() ;

        return view('frontend.products.index', compact('category', 'products'));
        }

        else {
            redirect('/')->with('status', 'The Product Does not exist') ;
        }

    }
}
