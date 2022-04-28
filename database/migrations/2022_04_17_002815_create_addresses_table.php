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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address')->require();
            $table->string('ext', 20)->require();
            $table->string('int', 20)->nullable();
            $table->string('zipcode', 5)->require();
            $table->string('suburb')->require();
            $table->string('municipaly')->require();
            $table->string('state')->require();
            $table->string('country')->require();
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
        Schema::dropIfExists('addresses');
    }
};
