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
        Schema::create('investors', function (Blueprint $table) {
            $table->id();
            $table->double('investment')->require();
            $table->boolean('partner')->require();
            $table->unsignedBigInteger('personal_information_id')->unique()->require();
            $table->unsignedBigInteger('address_id')->unique()->require();
            $table->unsignedBigInteger('documents_id')->unique()->require();

            $table->foreign('personal_information_id')
                ->references('id')->on('personal_information')
                ->onDelete('cascade');

            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('cascade');

            $table->foreign('documents_id')
                ->references('id')->on('documents')
                ->onDelete('cascade');
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
        Schema::dropIfExists('investors');
    }
};
