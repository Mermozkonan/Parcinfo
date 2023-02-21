<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Serviceseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            ["libServ"=>"NGSER"],
            ["libServ"=>"NOKIA"],
            ["libServ"=>"GOPA"],
            ["libServ"=>"HUAWEI"],
        ]);
    }
}
