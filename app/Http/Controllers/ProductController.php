<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($slug){
        $product = Product::where('slug', $slug)->first();
        return view('product', compact('product'));
    }
}
