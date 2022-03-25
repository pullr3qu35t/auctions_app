<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_sales')->truncate();

        $rows = [
            [
                'name' => 1,
            ],
            [
                'name' => 2,
            ],
            [
                'name' => 3,
            ],
            [
                'name' => 4,
            ],
        ];

        foreach ($rows as $row) {
            DB::table('categories_sales')->insert($row);
        }
    }
}
