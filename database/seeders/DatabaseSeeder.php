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
        DB::table('roles')->insert([
            [
                'name' => 'Администратор',
                'slug' => 'admin',
            ], [
                'name' => 'Пользователь',
                'slug' => 'user',
            ]
        ]);
        DB::table('genres')->insert([
            [
                'name' => 'Action',
                'slug' => 'Action',
            ],
            [
                'name' => 'Adventure',
                'slug' => 'Adventure',
            ],
            [
                'name' => 'Fighting',
                'slug' => 'Fighting',
            ],
            [
                'name' => 'Platform',
                'slug' => 'Platform',
            ],
            [
                'name' => 'Puzzle',
                'slug' => 'Puzzle',
            ],
            [
                'name' => 'Racing',
                'slug' => 'Racing',
            ],
            [
                'name' => 'RPG',
                'slug' => 'RPG',
            ],
            [
                'name' => 'Action RPG',
                'slug' => 'ActionRPG',
            ],
            [
                'name' => 'Sports',
                'slug' => 'Sports',
            ],
            [
                'name' => 'Strategy',
                'slug' => 'Strategy',
            ],
            [
                'name' => 'Simulator',
                'slug' => 'Simulator',
            ]
        ]);
        DB::table('publishers')->insert([
            [
                'name' => 'Electronic Arts',
                'slug' => 'ElectronicArts',
            ],
            [
                'name' => 'Mihoyo',
                'slug' => 'Mihoyo',
            ],
            [
                'name' => 'Rockstar Games',
                'slug' => 'Rockstar',
            ],
            [
                'name' => 'Ubisoft Entertainment',
                'slug' => 'Ubisoft',
            ],
            [
                'name' => 'Bethesda Softworks',
                'slug' => 'Bethesda',
            ],
            [
                'name' => 'CD Projekt RED',
                'slug' => 'CDProjektRED',
            ],
            [
                'name' => 'Bandai Namco Entertainment',
                'slug' => 'BandaiNamcoEntertainment',
            ],
            [
                'name' => 'Activision',
                'slug' => 'Activision',
            ],
            [
                'name' => 'Square Enix',
                'slug' => 'SquareEnix',
            ],
            [
                'name' => 'Capcom',
                'slug' => 'Capcom',
            ],
            [
                'name' => 'Sega',
                'slug' => 'Sega',
            ],
            [
                'name' => '505 Games',
                'slug' => '505Games',
            ],
            [
                'name' => 'Blizzard Entertainment',
                'slug' => 'BlizzardEntertainment',
            ],
        ]);
    }
}
