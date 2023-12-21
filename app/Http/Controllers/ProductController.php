<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $recommend_house = Product::take(3)->get();
        if ($product)
            return view('product', compact('product', 'recommend_house'));
        else
            return view('error.nohouse');


    }

    public function all_product()
    {
        $all_product = Product::take(9)->get();
        return view('all_product', compact('all_product'));
    }
    public function paradise(){
        $recommend_house = Product::take(9)->get();
        return view('paradise', compact('recommend_house'));
    }
}
