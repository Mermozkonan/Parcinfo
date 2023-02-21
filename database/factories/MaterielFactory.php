<?php

namespace Database\Factories;

use App\Models\Materiel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materiel>
 */
class MaterielFactory extends Factory
{
    protected $model= Materiel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "numeroSerie"=>$this->faker->lastName,
            "modele"=>$this->faker->swiftBicNumber,
            "fabriquant"=>$this->faker->lastName,
            "dateAcquisition"=>$this->faker->date,
            "typemateriel_id"=>rand(1,4),
            "fournisseur_id"=>rand(1,10),
            "user_id"=>rand(1,10),

        ];
    }
}
