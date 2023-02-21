<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Profilseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("profils")->insert([
            ["libProfil"=>"admin"],
            ["libProfil"=>"employe"],
            ["libProfil"=>"superamdin"]

        ]);
    }
}
