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
        Schema::create('proprietemateriels', function (Blueprint $table) {
            $table->id();
            $table->string('libPropriete');
            $table->foreignId('typemateriel_id')->constrained();
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
        Schema::table('proprietemateriels', function(Blueprint $table){
            $table->dropForeign(['typemateriel_id']);
        });
        Schema::dropIfExists('proprietemateriels');
    }
};
