<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gerentes', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->integer('nivel')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gerentes');
    }
};
