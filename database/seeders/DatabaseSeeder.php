<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hike_types')->insert([
            [
                'name' => 'Пешеходный'
            ], [
                'name' => 'Водный'
            ], [
                'name' => 'Горный'
            ], [
                'name' => 'Лыжный'
            ], [
                'name' => 'Велосипедный'
            ]
        ]);
        DB::table('cities')->insert([
            [
                'name' => 'Челябинск'
            ],[
                'name' => 'Москва'
            ],[
                'name' => 'Екатеринбург'
            ],[
                'name' => 'Санкт-Петербург'
            ],[
                'name' => 'Самара'
            ],[
                'name' => 'Воронеж'
            ],[
                'name' => 'Пермь'
            ],

        ]);
        DB::table('article_themes')->insert([
            [
                'name' => 'Подготовка'
            ],[
                'name' => 'Поход'
            ],[
                'name' => 'Места'
            ],[
                'name' => 'Еда'
            ],[
                'name' => 'Снаряжение'
            ]
        ]);
    }
}
