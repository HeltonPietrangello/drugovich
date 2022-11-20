<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Grupo;

class GruposSeeder extends Seeder
{
    public function run()
    {
        DB::table('grupos')->insert([
            'nome' => "Grupo 1"
        ]);

        DB::table('grupos')->insert([
            'nome' => "Grupo 2"
        ]);

        DB::table('grupos')->insert([
            'nome' => "Grupo 3"
        ]);
    }
}
