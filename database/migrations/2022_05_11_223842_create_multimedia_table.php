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
        Schema::create('multimedia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->index();
            $table->string('links');
            $table->string('multimedia1');
            $table->string('multimedia2');
            $table->string('multimedia3');
            $table->string('multimedia4');
            $table->string('multimedia5');
            $table->string('multimedia6');
            $table->string('multimedia7');
            $table->string('multimedia8');
            $table->string('multimedia9');
            $table->string('multimedia10');  
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
        Schema::dropIfExists('multimedia');
    }
};
