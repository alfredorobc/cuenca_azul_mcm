<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlGarrafones>
 */
class ControlGarrafonesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fechaSalida = $this->faker->dateTime;
        $fechaEntrada = $this->faker->dateTimeBetween($fechaSalida, 'now');

        return [
            'fecha_salida' => $fechaSalida,
            'fecha_entrada' => $fechaEntrada,
            'user_id' => 1, // ID del usuario al que pertenecen estos registros
            'garrafon_id' => $this->faker->randomElement([1, 2]), // Garrafón 1 o 2
        ];
    }
}
