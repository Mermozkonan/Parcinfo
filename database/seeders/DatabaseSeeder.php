<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fournisseur;
use App\Models\Maintenancier;
use App\Models\Materiel;
use App\Models\Ressource;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Typematerielseeder::class);
        $this->call(Serviceseeder::class);
        $this->call(Etatseeder::class);
        $this->call(Typepieceseeder::class);
        $this->call(Profilseeder::class);
        $this->call(Permissionseeder::class);
        Fournisseur::factory(30)->create();
        User::factory(15)->create();
        Materiel::factory(10)->create();
        Ressource::factory(150)->create();
        Maintenancier::factory(40)->create();
        User::find(1)->profils()->attach(1);
        User::find(2)->profils()->attach(2);
        User::find(3)->profils()->attach(3);



    }
}
