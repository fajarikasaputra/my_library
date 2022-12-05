<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengunjung>
 */
class PengunjungFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $arrayValues = ['KTP', 'KTM'];
        return [
            'nama' => $this->faker->name,
            'email' => $this->faker->safeEmail(),
            'alamat' => $this->faker->address(),
            'jaminan' => $this->faker->randomElement(['KTM', 'KTP']),
        ];
    }
}
