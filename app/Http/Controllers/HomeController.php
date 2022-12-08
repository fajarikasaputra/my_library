<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengunjung;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_buku = Buku::all()->count();
        $jumlah_pengunjung = Pengunjung::all()->count();
        $jumlah_peminjaman = Peminjaman::all()->count();
        $jumlah_pengembalian = Pengembalian::all()->count();

        //pie chart data buku paling banyak dipinjam
        $result = DB::select(DB::raw("select bukus.judul,  count( bukus.judul)'jumlah'
        FROM bukus INNER JOIN peminjamen on bukus.id = peminjamen.buku_id
        GROUP BY bukus.judul order by jumlah desc limit 5;
        "));
        $data = "";
        foreach ($result as $value) {
            $data .= "['" . $value->judul . "', " . $value->jumlah . "],";
        }
        $chartData = $data;

        //pie chart data jaminan pengunjung
        $jaminan_nih = DB::select(DB::raw("select jaminan, count(jaminan)'total'   FROM pengunjungs group by jaminan;"));
        $nilai = "";
        foreach ($jaminan_nih as $val) {
            $nilai .= "['" . $val->jaminan . "', " . $val->total . "],";
        }
        $jaminanData = $nilai;

        // Grafik data total peminjaman dalam satu tahun
        // SELECT COUNT(tanggal), monthname(tanggal)'bulan'  from peminjamen group by bulan;
        $dataPeminjaman = Peminjaman::orderBy('tanggal')
            ->select(DB::raw("COUNT(tanggal) as bul"))
            // ->whereYear("tanggal", date('Y'))
            ->groupBy(DB::raw("Month(tanggal)"))
            ->pluck('bul');



        // $dataPeminjaman = Peminjaman::select(DB::raw("select COUNT(tanggal),
        // month(tanggal)'bulan'
        // from peminjamen group by bulan order by bulan asc;
        // "))
        //     ->whereYear("tanggal", date('Y'))
        //     ->groupBy(DB::raw("Monthname(tanggal)"))
        //     ->pluck('count');



        // Grafik data total pengembalian dalam satu tahun
        // SELECT COUNT(tanggal), monthname(tanggal)'bulan'  from pengembalians group by bulan;
        $dataPengembalian = Pengembalian::orderBy('tanggal')
            ->select(DB::raw("COUNT(*) as count"))
            ->whereYear("tanggal", date('Y'))
            ->groupBy(DB::raw("Month(tanggal)"))
            ->pluck('count');

        return view('home', [
            'title' => 'Home',
        ], compact('chartData', 'jaminanData', 'dataPeminjaman', 'dataPengembalian'))
            ->with('jumlah_buku', $jumlah_buku)
            ->with('jumlah_pengunjung', $jumlah_pengunjung)
            ->with('jumlah_peminjaman', $jumlah_peminjaman)
            ->with('jumlah_pengembalian', $jumlah_pengembalian);
    }
}
