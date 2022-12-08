<?php

namespace Database\Factories;

use App\Models\Buku;
use App\Models\Pengunjung;
use Database\Factories\BukuFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $bukus_id = App\BukuFactory::pluck('id');
        $buku = Buku::pluck('id');
        $pengunjung = Pengunjung::pluck('id');

        return [
            'jumlah' => $this->faker->numberBetween(1, 4),
            'tanggal' => $this->faker->dateTimeThisYear(),
            'pengunjung_id' => $this->faker->randomElement($pengunjung),
            'buku_id' => $this->faker->randomElement($buku),
            // 'buku_id' => $this->factory->create(App\Buku::class)->id,
            // 'pengunjung_id' => $this->factory->create(App\Pengunjung::class)->id,

        ];
    }
}
