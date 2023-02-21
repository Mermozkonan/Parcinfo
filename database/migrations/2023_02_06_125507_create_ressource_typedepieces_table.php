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
        Schema::create('ressource_typedepieces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ressource_id')->constrained();
            $table->foreignId('typedepiece_id')->constrained();
            $table->string('NumeroPiece');
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
        Schema::table('ressource_typedepieces', function(Blueprint $table){
            $table->dropForeign(['ressource_id','typedepiece_id']);
        });
        Schema::dropIfExists('ressource_typedepieces');
    }
};
