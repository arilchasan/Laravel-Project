<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PenumpangModelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
      @return array
     */
    public function definition()
    {
        return [
            'tujuan_id' => mt_rand(1,5),
            'no_pendaftaran' => fake()->numerify('######'),
            'nama' => fake()->name(),   
            'tanggal' => fake()->dateTimeBetween($startDate = '-3 days', $endDate = '+60 days'),
            'alamat' => fake()->address(),
        ];
    }
}
