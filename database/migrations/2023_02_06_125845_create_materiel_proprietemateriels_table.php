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
        Schema::create('materiel_proprietemateriels', function (Blueprint $table) {
            $table->id();
            $table->string('valeur');
            $table->foreignId('materiel_id')->constrained();
            $table->foreignId('proprietemateriel_id')->constrained();
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
        Schema::table('materiel_proprietemateriels', function(Blueprint $table){
            $table->dropForeign(['materiel_id','proprietemateriel_id']);
        });
        Schema::dropIfExists('materiel_proprietemateriels');
    }
};
