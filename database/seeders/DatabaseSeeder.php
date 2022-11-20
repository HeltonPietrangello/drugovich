<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
             GruposSeeder::class,
             ClientesSeeder::class,
             GerentesSeeder::class,
        ]);
    }
}
