<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        
        $products = Products::all();
        $category = Category::all();
        $user = User::all();

        return view('home', compact('products', 'category', 'user'));
}


public function user(){
    $user = User::all() ;
    return view('admin.user', compact('user'));

}
}
