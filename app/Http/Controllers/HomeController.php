<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $products = Products::all();
        $category = Category::all();

        return view('home', compact('products', 'category'));
}
}
