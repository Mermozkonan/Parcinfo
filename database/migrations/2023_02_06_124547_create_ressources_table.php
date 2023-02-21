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
        Schema::create('ressources', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->boolean('sexe');
            $table->date('DateNaissance');
            $table->string('LieuNaissance');
            $table->string('telephone');
            $table->string('Email')->unique();
            $table->foreignId('service_id')->constrained();
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
        Schema::table('ressources', function(Blueprint $table){
            $table->dropForeign(['service_id']);
        });
        Schema::dropIfExists('ressources');
    }
};
