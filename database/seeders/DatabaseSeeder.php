<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySaleSeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(CurrencySeeder::class);
    }
}
