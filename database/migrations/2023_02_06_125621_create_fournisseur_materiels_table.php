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
        Schema::create('fournisseur_materiels', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fournisseur_id')->constrained();
            $table->foreignId('materiel_id')->constrained();
            $table->integer('garantie');
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
        Schema::table('fournisseur_materiels', function(Blueprint $table){
            $table->dropForeign(['fournisseur_id','materiel_id']);
        });
        Schema::dropIfExists('fournisseur_materiels');
    }
};
