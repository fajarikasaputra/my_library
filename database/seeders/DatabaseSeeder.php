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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);




        Buku::factory(58)->create();
        Pengunjung::factory(50)->create();
        Peminjaman::factory(100)->create();
        Pengembalian::factory(70)->create();
    }
}
