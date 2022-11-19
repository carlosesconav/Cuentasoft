<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaCobrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_cobros', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('valor');
            $table->integer('meses_pagados');
            $table->date('fecha_pago');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta_cobros');
    }
}
