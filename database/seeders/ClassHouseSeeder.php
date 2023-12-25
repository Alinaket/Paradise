<?php

namespace Database\Seeders;

use App\Models\ClassHouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassHouse::truncate();
        ClassHouse::insert([
            ['tag'=>'four-room', 'name'=>'Чотирикімнатні'],
            ['tag'=>'three-room', 'name'=>'Трикімнатні'],
            ['tag'=>'two-room', 'name'=>'Двокімнатні'],
            ['tag'=>'one-room', 'name'=>'Однокімнатні'],
            ['tag'=>'house', 'name'=>'Будинки'],
            ['tag'=>'new-house', 'name'=>'Новобудови'],
            ['tag'=>'new-house-lv', 'name'=>'Новобудови Львів'],
            ['tag'=>'rent-commerce', 'name'=>'Оренда Комерція'],
            ['tag'=>'rent-housing', 'name'=>'Оренда житло'],
        ]);
    }
}
