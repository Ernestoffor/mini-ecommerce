<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $category = Category::all();

        return view('admin.index', compact('products', 'category'));
    }
}
