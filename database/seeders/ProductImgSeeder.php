<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImg;
use Database\Factories\ProductImgFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImg::truncate();
        $all_product = Product::get();
        foreach ($all_product as $item){
            ProductImg::factory()
                ->count(4)
                ->state(new Sequence(
                    ProductImgFactory::setRagToRed([
                        'product_id'=>$item->id
                    ]),
                ))
                ->create();
        }
    }
}
