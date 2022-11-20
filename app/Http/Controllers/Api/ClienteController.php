<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grupo;


class ClienteController extends Controller
{
    public function index(Grupo $grupo)
    {
        return $grupo->clientes;
    }
}
