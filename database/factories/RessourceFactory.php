<?php

namespace Database\Factories;

use App\Models\Ressource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ressource>
 */
class RessourceFactory extends Factory
{
    protected $model= Ressource::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'nom'=>$this->faker->lastName,
            'prenom'=>$this->faker->firstName,
            "sexe"=>array_rand(["H","F"], 1),
            'DateNaissance'=>$this->faker->dateTimeBetween('01-01-1980','30-12-2001'),
            'LieuNaissance'=>$this->faker->city,
            'telephone'=>$this->faker->phoneNumber,
            'Email'=>$this->faker->email,
            'service_id'=>rand(1,4)
        ];
    }
}
