<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Typematerielseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("typemateriels")->insert([
            ["libType"=>"ordinateur"],
            ["libType"=>"router"],
            ["libType"=>"imprimente"],
            ["libType"=>"immobilier"],
        ]);
    }
}
