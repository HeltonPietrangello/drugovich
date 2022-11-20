<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GerentesSeeder extends Seeder
{
    public function run()
    {
        DB::table('gerentes')->insert([
            'nome' => 'Gerente Nivel 1',
            'email' => 'gerente_1_@gmail.com',
            'password' => bcrypt(123456789),
            'nivel' => 1
        ]);

        DB::table('gerentes')->insert([
            'nome' => 'Gerente Nivel 2',
            'email' => 'gerente_2_@gmail.com',
            'password' => bcrypt(123456789),
            'nivel' => 2
        ]);
    }
}
