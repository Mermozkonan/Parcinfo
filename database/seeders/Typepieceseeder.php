<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Typepieceseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("typedepieces")->insert([
            ["libPiece"=>"CNI"],
            ["libPiece"=>"ATTESTATION"],
            ["libPiece"=>"PASSPORT"],
            ["libPiece"=>"PERMIS"],
        ]);
    }
}
