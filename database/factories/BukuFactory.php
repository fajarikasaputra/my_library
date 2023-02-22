<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(1, 4)),
            'isbn' => $this->faker->isbn13(),
            'penerbit' => $this->faker->name,
            'penulis' => $this->faker->name,
            'tahun_terbit' => $this->faker->year,
            'stok' => $this->faker->numberBetween(15, 100),
        ];
    }
}
