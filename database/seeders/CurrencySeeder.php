<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('currencies')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $rows = [
            [
                'sign'         => '$',
                'abbreviation' => 'USD',
                'description'  => 'United States Dollar',
                'created_at'   => now(),
            ],
            [
                'sign'         => '$',
                'abbreviation' => 'CUP',
                'description'  => 'Moneda Nacional',
                'created_at'   => now(),
            ],
        ];

        foreach ($rows as $row) {
            DB::table('currencies')->insert($row);
        }
    }
}
