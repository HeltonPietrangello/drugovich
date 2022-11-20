<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Gerente extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $table = 'gerentes';

    public $timestamps= false;

    protected $guard = 'gerente';

    protected $fillable = ['nome', 'email', 'nivel'];

}
