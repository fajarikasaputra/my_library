<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use App\Models\Pengunjung;
use App\Models\Pengembalian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Fajar Ika Saputra',
            'email' => 'fajarikasaputra@gmail.com',
            'password' => bcrypt('12345678'),
            'level' => 'admin',
        ]);

        // Buku::factory(58)->create();
        // Pengunjung::factory(50)->create();
        // Peminjaman::factory(100)->create();
        // Pengembalian::factory(70)->create();

        Buku::factory(114)->create();
        Pengunjung::factory(84)->create();
        Peminjaman::factory(84)->create();
        Pengembalian::factory(63)->create();
    }
}
