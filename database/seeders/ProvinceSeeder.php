<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('provinces')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $rows = [
            [
                'name'       => 'La Habana',
                'created_at' => now(),
            ],
            [
                'name'       => 'Pinar del Río',
                'created_at' => now(),
            ],
            [
                'name'       => 'Artemisa',
                'created_at' => now(),
            ],
            [
                'name'       => 'Mayabeque',
                'created_at' => now(),
            ],
            [
                'name'       => 'Matanzas',
                'created_at' => now(),
            ],
            [
                'name'       => 'Cienfuegos',
                'created_at' => now(),
            ],
            [
                'name'       => 'Villa Clara ',
                'created_at' => now(),
            ],
            [
                'name'       => 'Sancti Spíritus',
                'created_at' => now(),
            ],
            [
                'name'       => 'Ciego de Ávila',
                'created_at' => now(),
            ],
            [
                'name'       => 'Camagüey',
                'created_at' => now(),
            ],
            [
                'name'       => 'Las Tunas',
                'created_at' => now(),
            ],
            [
                'name'       => 'Holguín',
                'created_at' => now(),
            ],
            [
                'name'       => 'Granma',
                'created_at' => now(),
            ],
            [
                'name'       => 'Santiago de Cuba',
                'created_at' => now(),
            ],
            [
                'name'       => 'Guantánamo',
                'created_at' => now(),
            ],
        ];

        foreach ($rows as $row) {
            DB::table('provinces')->insert($row);
        }
    }
}
