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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_working');
            $table->double('annual_earnings')->require();
            $table->integer('employees')->require();
            $table->double('goal')->require();
            $table->date('estimated term')->require();
            $table->string('location')->require();
            $table->foreignId('project_type_id')->index()->unique();            
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
        Schema::dropIfExists('projects');
    }
};
