<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class homeController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
        ]);
    }

    public function peminjaman()
    {
        return view('peminjaman', [
            'title' => 'Peminjaman',
        ]);
    }

    public function pengembalian()
    {
        return view('pengembalian', [
            'title' => 'Pengembalian',
        ]);
    }

    public function riwayat()
    {
        return view('riwayat', [
            'title' => 'Riwayat Peminjaman',
        ]);
    }

    public function riwayatpengembalian()
    {
        return view('riwayatpengembalian', [
            'title' => 'Riwayat Pengembalian',
        ]);
    }

    public function buku()
    {
        return view('buku', [
            'title' => 'Data Buku',
            'buku' => Buku::all()
        ]);
    }

    public function pengunjung()
    {
        return view('pengunjung', [
            'title' => 'Data Pengunjung',
        ]);
    }

    public function peminjaman_post()
    {
        return "data anda telah disubmit";
    }
}
