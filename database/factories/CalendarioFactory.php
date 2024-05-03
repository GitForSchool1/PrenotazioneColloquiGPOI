<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calendario>
 */
class CalendarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NameProfessore' => $this->faker->name(),
            'SurnameProfessore' => $this->faker->name(),
            'day' => now(),
            'Metodologia' => '', 
            'Aula' => rand(1,100),
            'Prenotazione' => rand(1,100),
            'OrarioInizio' => now(),
            'OrarioFine' => now()
        ];
    }
}