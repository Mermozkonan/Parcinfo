<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Statutseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("statuts")->insert([
            ["libStatut"=>"ATTRIBUE FONCTIONNEL"],
            ["libStatut"=>"EN STOCK A MAINTENIR"],
            ["libStatut"=>"EN STOCK FONCTIONNEL"],
            ["libStatut"=>"EN STOCK HORS SERVICE"]

        ]);
    }
}
