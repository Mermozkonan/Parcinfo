<?php

namespace Database\Factories;

use App\Models\Maintenancier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenancier>
 */
class MaintenancierFactory extends Factory
{
    protected $model= Maintenancier::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'RaisonSocial'=>$this->faker->lastName,
            'telephone'=>$this->faker->phoneNumber,
            'Email'=>$this->faker->email
        ];
    }
}
