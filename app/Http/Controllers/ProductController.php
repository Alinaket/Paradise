<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if ($product)
            return view('product', compact('product'));
        else
            return view('error.nohouse');


    }

    public function all_product()
    {
        $all_product = Product::take(9)->get();
        return view('all_product', compact('all_product'));
    }
    public function app_product(){
        $app_product = Product::take(3)->get();
        return view('app_product', compact('app_product'));
    }
}
