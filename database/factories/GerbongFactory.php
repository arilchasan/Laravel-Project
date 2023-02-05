<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gerbong>
 */
class GerbongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode' => fake()->numberBetween('1','30'),
            'nama' => fake()->name(),   
            'jumlah_kursi' =>fake()->numerify('##')
        ];
    }
}
