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
        Schema::create('ressource_materiels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ressource_id')->constrained();
            $table->foreignId('materiel_id')->constrained();
            $table->date('DateAttribution');
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
        Schema::table('ressource_materiels', function(Blueprint $table){
            $table->dropForeign(['ressource_id','materiel_id']);
        });
        Schema::dropIfExists('ressource_materiels');
    }
};
