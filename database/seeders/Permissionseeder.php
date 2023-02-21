<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Permissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["libPermission"=>"ajouter une ressource"],
            ["libPermission"=>"consulter une ressource"],
            ["libPermission"=>"editer une ressource"],

            ["libPermission"=>"ajouter un materiel"],
            ["libPermission"=>"consulter un materiel"],
            ["libPermission"=>"editer un materiel"],

            ["libPermission"=>"ajouter une attribution"],
            ["libPermission"=>"consulter une attribution"],
            ["libPermission"=>"editer une attribution"]

        ]);
    }
}
