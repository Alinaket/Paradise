<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use function Laravel\Prompts\select;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImg>
 */
class ProductImgFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public static array $data_attr = [];
    public function definition(): array
    {
        return [
            'product_id'=>self::$data_attr['product_id'],
            'is_active'=>true,
            'url'=>$this->faker->imageUrl(),
            'sort'=>rand(1,100),




        ];
    }
    public static function setRagToRed($data_attr): array
    {
        self::$data_attr = $data_attr;

        return [];
    }
}
