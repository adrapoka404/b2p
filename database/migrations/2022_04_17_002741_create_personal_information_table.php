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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->date('birthday');
            $table->string('genere', 45)->require();
            $table->string('mobile', 10)->unique()->require();
            $table->string('nationality', 15)->require();
            $table->string('curp', 18)->unique()->require();
            $table->boolean('curp_verify');
            $table->string('rfc', 15)->require();
            $table->boolean('rfc_verify');
            $table->foreignId('economic_activity_id')->index();
            $table->foreignId('income_id')->index();
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
        Schema::dropIfExists('personal_information');
    }
};
