<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    function index(){
        return view('dashboard.index') ;
    }


    // public function add()
    // {
    //     $categories = Category::all();
    //     $featured_products = Product::where('featured', true)->get();

    //     return view('frontend.index', compact('categories', 'featured_products'));
    // }
}

