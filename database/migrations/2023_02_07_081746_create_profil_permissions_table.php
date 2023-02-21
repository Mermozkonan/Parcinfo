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
        Schema::create('profil_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profil_id')->constrained();
            $table->foreignId('permission_id')->constrained();
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
        Schema::table('profil_permissions', function(Blueprint $table){
            $table->dropForeign(['profil_id','permission_id']);
        });
        Schema::dropIfExists('profil_permissions');
    }
};
