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
        Schema::create('etat_materiels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etat_id')->constrained();
            $table->foreignId('materiel_id')->constrained();
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
        Schema::table('etat_materiels', function(Blueprint $table){
            $table->dropForeign(['etat_id','materiel_id']);
        });
        Schema::dropIfExists('etat_materiels');
    }
};
