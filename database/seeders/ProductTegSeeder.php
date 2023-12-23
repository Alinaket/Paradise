<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductTeg;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductTeg::truncate();
        $data = [];
        $products = Product::pluck('id');
        $tegs = Tag::pluck('id')->toArray();


        foreach ($products as $item){
            for($i=0; $i<rand(3,15); $i++){
                $data[]=[
                    'product_id'=> $item,
                    'teg_id' => array_rand($tegs),
                ];
            }
        }
        ProductTeg::insert($data);
    }
}
