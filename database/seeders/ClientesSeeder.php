<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'cnpj' => 'XX. XXX. XXX/0001-XX',
            'nome' => 'Cliente 1',
            'grupo_id' => 1
        ]);
        DB::table('clientes')->insert([
            'cnpj' => 'XX. XXX. XXX/0001-XX',
            'nome' => 'Cliente 2',
            'grupo_id' => 1
        ]);
        DB::table('clientes')->insert([
            'cnpj' => 'XX. XXX. XXX/0001-XX',
            'nome' => 'Cliente 3',
            'grupo_id' => 3
        ]);
    }
}
