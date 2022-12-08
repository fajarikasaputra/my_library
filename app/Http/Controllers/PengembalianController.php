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
    public function index(Request $request)
    {
        // $pengembalian = Pengembalian::all();
        // $pengembalian = Pengembalian::whereHas('peminjaman', function ($query) use ($request) {
        $peminjaman = Peminjaman::all();
        $pengunjung = Pengunjung::all();
        $buku = Buku::all();
        if ($request->has('search')) {
            $pengembalian = Pengembalian::where('id', 'LIKE', '%' . $request->search . '$')
                ->orWhereHas('peminjaman', function ($query) use ($request) {
                    $query->where('id', 'LIKE', '%' . $request->search . '%')
                        ->orWhereHas(
                            'pengunjung',
                            function ($query) use ($request) {
                                $query->where('nama', 'LIKE', '%' . $request->search . '%');
                            }
                        )->orWhereHas(
                            'buku',
                            function ($query) use ($request) {
                                $query->where('judul', 'LIKE', '%' . $request->search . '%');
                            }
                        );
                })
                ->paginate(5);
        } else {
            $pengembalian = Pengembalian::orderBy('tanggal', 'ASC')
                ->paginate(5);
        }


        // $pengunjung = Pengunjung::all();
        // $bukuYGPINJAM = Peminjaman::where('buku_id', $search)->get();


        return view('pengembalian', compact('buku', 'peminjaman', 'pengembalian', 'pengunjung'), [
            'title' => 'Pengembalian'
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
        $pengembalian = new Pengembalian();
        $buku = Buku::all();
        return view('pengembalianPages/create', compact('buku', 'peminjaman', 'pengembalian', 'pengunjung'), [
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
        // $buku = Buku::all();
        // $peminjaman = Peminjaman::all();
        // $pengunjung = Pengunjung::all();
        // $peminjaman = Peminjaman::create($request->all());
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

        $buku = Buku::find($id);
        $pengunjung = Pengunjung::find($id);
        $peminjaman = Peminjaman::all();
        $pengembalian = Pengembalian::find($id);
        return view(
            'pengembalianPages/edit',
            [
                'peminjaman' => $peminjaman,
                'pengunjung' => $pengunjung,
                'pengembalian' => $pengembalian
            ],
            ['title' => 'Pengembalian']
        );
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
        // $buku = Buku::find($id);
        // $pengunjung = Pengunjung::find($id);
        // $pengembalian = Pengembalian::all();
        // $peminjaman = Peminjaman::find($id);
        $pengembalian = Pengembalian::find($id);
        $pengembalian->peminjaman_id = $request->peminjaman_id;
        $pengembalian->peminjaman->nama = $request->nama;
        $pengembalian->save();

        return redirect('pengembalian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengembalian = Pengembalian::find($id);
        $pengembalian->delete();
        return redirect('pengembalian');
    }
}
