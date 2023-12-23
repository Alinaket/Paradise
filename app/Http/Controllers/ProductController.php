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

    public function all_product($type = null)
    {
        switch ($type) {
            case 'rent':
                $type_key = 1;
                break;
            case 'buy':
                $type_key = 2;
                break;
            case 'new_buildings':
                $type_key = 3;
                    break;
            default:
                $type_key = null;
        }
        $all_product = Product::take(9);
        if ($type_key) {
            $all_product = $all_product->where('type', $type_key);
        }

        $all_product = $all_product->get();
        return view('all_product', compact('all_product'));
    }

    public function paradise()
    {
        $recommend_house = Product::take(9)->get();
        return view('paradise', compact('recommend_house'));
    }
}
