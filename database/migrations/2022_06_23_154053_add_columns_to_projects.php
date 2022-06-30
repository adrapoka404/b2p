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
        Schema::table('projects', function (Blueprint $table) {
            $table->double('goal_two')->after('goal')->nullable();
            $table->text('inputs')->after('goal_two')->nullable();
            $table->text('origins')->after('inputs')->nullable();
            $table->double('request_max')->after('origins')->nullable();
            $table->double('request_min')->after('request_max')->nullable();
            $table->boolean('debt')->after('request_min')->nullable();
            $table->text('debs')->after('debt')->nullable();
            $table->integer('estimated_term')->after('debs')->nullable();
            $table->integer('estimated_ejecution')->after('estimated_term')->nullable();
            $table->double('min_investment')->after('estimated_ejecution')->nullable();
            $table->text('personal')->after('min_investment')->nullable();
            $table->text('mobra')->after('personal')->nullable();
            $table->text('insumos')->after('mobra')->nullable();
            $table->text('equipo')->after('insumos')->nullable();
            $table->text('mobiliario')->after('equipo')->nullable();
            $table->text('construccion')->after('mobiliario')->nullable();
            $table->text('reparaciones')->after('construccion')->nullable();
            $table->text('arrendamiento')->after('reparaciones')->nullable();
            $table->text('inmueble')->after('arrendamiento')->nullable();
            $table->text('tramites')->after('inmueble')->nullable();
            $table->text('software')->after('tramites')->nullable();
            $table->text('otros')->after('software')->nullable();
            $table->text('porcents')->after('otros')->nullable();
            $table->string('render')->after('porcents')->nullable();
            $table->string('doc_avala')->after('render')->nullable();
            $table->integer('document_type_id')->after('doc_avala')->nullable();
            $table->boolean('completo')->after('document_type_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('goal_two','inputs','origins', 'request_max', 'request_min', 'debt', 'debs', 'estimated_term', 'estimated_ejecution',
            'min_investment', 'personal', 'mobra', 'insumos', 'equipo', 'mobiliario', 'construccion', 'reparaciones', 'arrendamiento', 'inmueble',
            'tramites', 'software', 'otros', 'porcents', 'render', 'doc_avala', 'document_type_id', 'completo');
        });
    }
};
