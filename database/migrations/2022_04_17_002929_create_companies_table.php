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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->require();
            $table->string('tradename')->require();
            $table->date('constitution _date')->require();
            $table->string('website');
            $table->string('contact_person')->require();
            $table->string('contact_email')->unique()->require();
            $table->string('turn')->require();
            $table->string('locations')->require();
            $table->string('record_situation')->require();
            $table->string('area_oparations')->require();
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
        Schema::dropIfExists('companies');
    }
};
