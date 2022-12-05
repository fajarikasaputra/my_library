<?php

namespace Database\Factories;

use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengembalian>
 */
class PengembalianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $peminjaman_ids = \DB::table('peminjamen')->select('id')->get();
        // $peminjamen_id = $this->faker->randomElement($peminjaman_ids)->id;
        $peminjaman = Peminjaman::pluck('id');
        return [
            'peminjaman_id' => $this->faker->randomElement($peminjaman)
            // 'peminjaman_id' => Peminjaman::all()->random()->id(UPDATE),
            // 'peminjaman_id' => $this->factory->create(App\Peminjaman::class)->id,
        ];
    }
}
