<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->truncate();

        $rows = [
            [
                'name'        => 'Mujeres',
                'category_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Hombres',
                'category_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bebes',
                'category_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rebajas y Ofertas',
                'category_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cine y TV',
                'category_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Audifonos',
                'category_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'VideosJuegos',
                'category_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rebajas y Ofertas',
                'category_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'TV y Video',
                'category_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Camara, Fotografia y Video',
                'category_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Celulares y Accesorios',
                'category_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rebajas y Ofertas',
                'category_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Computadoras, Tablets y Laptops',
                'category_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Monitores',
                'category_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rebajas y Ofertas',
                'category_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Decoracion del Hogar',
                'category_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Muebles',
                'category_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cocina y Comedor',
                'category_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ropa de Cama',
                'category_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Electrodomesticos',
                'category_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rebajas y Ofertas',
                'category_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Comida para perros',
                'category_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Comida para gatos',
                'category_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Salon de Belleza y SPA',
                'category_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Salud, Hogar y cuidado para el bebe',
                'category_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Juguetes y juegos de mesa',
                'category_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Videojuegos infantiles',
                'category_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Videojuegos infantiles',
                'category_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Partes y accesorios',
                'category_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Motos',
                'category_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Carros',
                'category_id' => 9,
                'created_at'  => now(),
            ],
        ];

        foreach ($rows as $row) {
            DB::table('sub_categories')->insert($row);
        }
    }
}
