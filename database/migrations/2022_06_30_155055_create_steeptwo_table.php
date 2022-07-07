<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steeptwo', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('project_id');
            $table->text('description')->nullable();
            $table->string('razonsocial')->nullable();
            $table->string('nombrecomercial')->nullable();
            $table->string('constitution')->nullable();
            $table->string('iniciofunciones')->nullable();
            $table->string('whynoinfunction')->nullable();
            $table->string('rfc')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('yt')->nullable();
            $table->string('tt')->nullable();
            $table->string('inst')->nullable();
            $table->integer('type')->nullable();
            $table->double('ganacias_year1')->nullable();
            $table->double('ganacias_year2')->nullable();
            $table->double('ganacias_year3')->nullable();
            $table->double('ganacias_esperadas')->nullable();
            $table->integer('empleados')->nullable();
            $table->string('calle')->nullable();
            $table->string('noexterior')->nullable();
            $table->string('nointerior')->nullable();
            $table->integer('cp')->nullable();
            $table->string('colonia')->nullable();
            $table->string('referencia')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('url_services')->nullable();
            $table->integer('completo')->nullable();
            $table->integer('exist')->nullable();
            $table->string('rfc_doc')->nullable();
            $table->string('acta_constitutiva')->nullable();
            $table->string('carta_poder')->nullable();
            $table->string('aviso_modificacion')->nullable();
            $table->string('cedula')->nullable();
            $table->string('constancia_fiscal')->nullable();
            $table->string('declaracion_fiscal')->nullable();
            $table->string('declaracion_mensual')->nullable();
            $table->string('comprobante_domicilio')->nullable();
            $table->string('datos_bancarios')->nullable();
            $table->string('cv')->nullable();
            $table->string('foto_exterior')->nullable();
            $table->string('foto_interior')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steeptwo');
    }
};
