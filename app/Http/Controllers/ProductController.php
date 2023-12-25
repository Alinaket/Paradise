<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

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

    public function all_product(Request $request, $type = null)
    {
//        $name = \Illuminate\Support\Facades\Route::currentRouteName();
//        dd($name);
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
        if ($request->has('location')) {
            $all_product = $all_product->where('location', $request->input('location'));
        }
        $all_product = $all_product->get();
        return view('all_product', compact('all_product', 'type'));
    }

    public function paradise()
    {
        $recommend_house = Product::take(9)->get();
        return view('paradise', compact('recommend_house'));
    }
}
