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
        Schema::create('materiel_statuts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materiel_id')->constrained();
            $table->foreignId('statut_id')->constrained();
            $table->date('DateDebut');
            $table->date('DateFin');
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
        Schema::table('materiel_statuts', function(Blueprint $table){
            $table->dropForeign(['materiel_id','statut_id']);
        });
        Schema::dropIfExists('materiel_statuts');
    }
};
