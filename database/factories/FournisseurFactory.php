<?php

namespace Database\Factories;

use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fournisseur>
 */
class FournisseurFactory extends Factory
{
    protected $model= Fournisseur::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "RaisonSocial"=>$this->faker->lastName,
            "telephone"=>$this->faker->phoneNumber,
            "Email"=>$this->faker->email,

        ];
    }
}
