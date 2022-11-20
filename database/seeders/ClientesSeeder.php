<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        DB::table('clientes')->insert([
            'cnpj' => 'XX. XXX. XXX/0001-XX',
            'nome' => 'Cliente 1',
            'data_fundacao' => '23/01/1985',
            'grupo_id' => 1

        ]);

        DB::table('clientes')->insert([
            'cnpj' => 'XX. XXX. XXX/0002-XX',
            'nome' => 'Cliente 2',
            'data_fundacao' => '05/12/2001',
            'grupo_id' => 1

        ]);
        
        DB::table('clientes')->insert([
            'cnpj' => 'XX. XXX. XXX/0003-XX',
            'nome' => 'Cliente 3',
            'data_fundacao' => '29/01/1982',
            'grupo_id' => 3
        ]);
    }
}
