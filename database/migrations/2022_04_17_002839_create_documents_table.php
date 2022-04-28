<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('url_ine')->require();
            $table->string('url_curp')->require();
            $table->string('url_rfc')->require();
            $table->string('url_home')->require();
            $table->string('url_tax_situation')->require();
            $table->string('url_bureau report')->require();
            $table->string('url_collateral')->require();
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
        Schema::dropIfExists('documents');
    }
};
