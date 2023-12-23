<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::truncate();
        Location::insert([
            ['tag'=>'lv', 'name'=>'Львів'],
            ['tag'=>'zk', 'name'=>'Закарпаття'],
        ]);
    }
}
