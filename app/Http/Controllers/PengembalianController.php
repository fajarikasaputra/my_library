<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengunjung;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        $pengembalian = Pengembalian::all();
        $pengunjung = Pengunjung::all();
        $buku = Buku::all();
        // $pengunjung = Pengunjung::all();
        // $bukuYGPINJAM = Peminjaman::where('buku_id', $search)->get();

        return view('pengembalian', [
            'title' => 'Pengembalian',
            // 'peminjam' => Peminjaman::has('Pengunjung')->get()->id,
            'peminjam' => Peminjaman::all(),
            'buku' => $buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjaman = Peminjaman::all();
        $pengembalian = Pengembalian::all();
        $pengunjung = Pengunjung::all();
        $buku = Buku::all();
        return view('pengembalian', compact('buku', 'peminjaman', 'pengembalian', 'pengunjung'), [
            'title' => 'Pengembalian'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = Buku::all();
        $peminjaman = Peminjaman::all();
        $pengunjung = Pengunjung::all();
        $pengembalian = Pengembalian::create($request->all());
        $pengembalian->save();

        return redirect('pengembalian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
