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
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string('numeroSerie');
            $table->string('modele');
            $table->string('fabriquant');
            $table->date('dateAcquisition');
            $table->foreignId('typemateriel_id')->constrained();
            $table->foreignId('fournisseur_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiels', function(Blueprint $table){
            $table->dropForeign(['typemateriel_id','fournisseur_id','user_id']);
        });
        Schema::dropIfExists('materiels');
    }
};
