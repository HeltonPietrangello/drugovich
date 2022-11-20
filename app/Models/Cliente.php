<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['cnpj', 'nome', 'data_fundacao'];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
