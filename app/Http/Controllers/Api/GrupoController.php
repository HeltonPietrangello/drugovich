<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Grupo;

class GrupoController extends Controller
{
    private $grupo;

    public function __construct(Grupo $grupo)
    {
       $this->grupo = $grupo;
    }

    
    public function index()
    {
        return $this->grupo->all();
    }


    public function store(Request $request)
    {
        return $this->grupo->create($request->all());
    }


    public function show(Grupo $grupo)
    {
        return $grupo;
    }


    public function update(Request $request, Grupo $grupo)
    {
        $grupo->update($request->all());

        return $grupo;
    }


    public function destroy(Grupo $grupo)
    {
        return $grupo->delete();
    }
}
