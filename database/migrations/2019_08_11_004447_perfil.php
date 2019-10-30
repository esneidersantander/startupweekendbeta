<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function(Blueprint $table)
        {
            
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('tipo');
            $table->string('niveleducacion');
            $table->string('necesidad');
            $table->string('edad');
            $table->string('sexo');
            $table->string('tallacamisa');
            $table->string('decidisteparticipar');
            $table->string('estarinformadocomunidad');
            $table->string('estarinformadoboletin');
                        
        });
        Schema::create('evento', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->date('dia');
            $table->time('hora');  
            $table->string('actividad');
            $table->string('descripcion');
        });
        Schema::create('mentor', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('foto');
            $table->string('especialidad');
            $table->string('descripcion');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('email');
            $table->string('sitioweb');
        });
        Schema::create('sponsor', function(Blueprint $table)
        {
            $table->bigIncrements('id');  
            $table->string('nivel');
            $table->string('imagen');
            $table->string('sitioweb');
        });
        Schema::create('organizador', function(Blueprint $table)
        {
            $table->bigIncrements('id');  
            $table->string('nombre');
            $table->string('apellido');
            $table->string('imagen');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('email');
            $table->string('sitioweb');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil');
    }
}