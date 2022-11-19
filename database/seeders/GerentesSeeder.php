<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GerentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gerentes')->insert([
            'nome' => 'Gerente 1',
            'email' => 'gerente1@gmail.com',
            'nivel' => 1
        ]);

        DB::table('gerentes')->insert([
            'nome' => 'Gerente 2',
            'email' => 'gerente2@gmail.com',
            'nivel' => 2
        ]);

    }
}
