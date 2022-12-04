<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $peminjaman = Peminjaman::all();
        $pengunjung = Pengunjung::all();
        $buku = Buku::all();
        if ($request->has('search')) {
            $peminjaman = Peminjaman::where('judul', 'LIKE', '%' . $request->search . '$')->paginate(5);
        } else {
            $peminjaman = Peminjaman::paginate(5);
        }
        return view('peminjaman', compact('buku', 'pengunjung', 'peminjaman'), [
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
        $pengunjung = Pengunjung::all();
        $buku = Buku::all();
        $peminjaman = new Peminjaman;
        return view('peminjamanPages/create', compact('buku', 'pengunjung',  'peminjaman'), [
            'title' => 'Peminjaman'
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
        // $peminjaman = new Peminjaman;
        // $peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
        // $peminjaman->email = $request->email;
        // $peminjaman->alamat = $request->alamat;
        // $peminjaman->jaminan = $request->jaminan;
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
        $peminjaman = Peminjaman::find($id);
        return view('peminjamanPages/edit', compact('peminjaman', 'buku', 'pengunjung'), ['title' => 'Peminjaman']);
        // return view(
        //     'peminjamanPages/edit',
        //     compact('peminjaman'),
        //     [
        //         'title' => 'Peminjaman'
        //     ]
        // );
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
        $buku = Buku::find($id);
        $pengunjung = Pengunjung::find($id);
        $peminjaman = Peminjaman::find($id);
        $peminjaman = Peminjaman::all();
        $peminjaman->save();

        return redirect('peminjaman', compact('buku', 'peminjaman', 'pengunjung'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();
        return redirect('peminjaman');
    }
}
