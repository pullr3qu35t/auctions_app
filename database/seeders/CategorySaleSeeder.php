<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySaleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('auction_categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $rows = [
            [
                'name'       => 'Ropa, Zapatos y Joyeria',
                'created_at' => now(),
            ],
            [
                'name'       => 'Peliculas, Musicas y Juegos',
                'created_at' => now(),
            ],
            [
                'name'       => 'Electronicos',
                'created_at' => now(),
            ],
            [
                'name'       => 'Computadoras',
                'created_at' => now(),
            ],
            [
                'name'       => 'Hogar, Jardin y Herramientas',
                'created_at' => now(),
            ],
            [
                'name'       => 'Articulos para mascotas',
                'created_at' => now(),
            ],
            [
                'name'       => 'Belleza y Salud',
                'created_at' => now(),
            ],
            [
                'name'       => 'Juguetes y Bebe',
                'created_at' => now(),
            ],
            [
                'name'       => 'Automotriz',
                'created_at' => now(),
            ],
        ];

        foreach ($rows as $row) {
            DB::table('auction_categories')->insert($row);
        }
    }
}
