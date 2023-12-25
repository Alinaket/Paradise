<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();
        $slug = $this->create_slug($name);
        $rand_location = Location::inRandomOrder()->first();
        return [
            'name'=>$name,
            'slug'=>$slug,
            'price'=>rand(1000, 100000),
            'description'=>$this->faker->text(5000),
            'address'=>$this->faker->address(),
            'location'=>$rand_location->tag,
            'type'=>rand(1,3),
            'classHouse' =>rand(1,11),

        ];
    }
    private function create_slug($text){
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9+]/','-', $text);
        $text = trim($text,'-');
        return $text;
    }
}
