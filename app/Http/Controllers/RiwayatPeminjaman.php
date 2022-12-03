<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiwayatPeminjaman extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        $pengunjung = Pengunjung::all();
        $buku = Buku::all();
        return view('peminjaman', compact('peminjaman', 'pengunjung', 'buku'), [
            'title' => 'Peminjaman'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();

        $peminjaman = new RiwayatPeminjaman;
        $peminjamans = new Peminjaman;
        $buku = new Buku;
        return view(
            'peminjamanPages/create',
            compact('peminjaman', 'peminjamans', 'buku'),
            [
                'title' => 'Peminjaman'
            ]
        );
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
        $peminjaman = Peminjaman::create($request->all());
        $peminjaman->save();


        return redirect('peminjaman');
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
