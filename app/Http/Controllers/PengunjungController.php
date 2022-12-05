<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $pengunjung = Pengunjung::where('nama', 'LIKE', '%' . $request->search . '%',)
                ->orWhere('alamat', 'LIKE', '%' . $request->search . '%')
                ->orWhere('email', 'LIKE', '%' . $request->search . '%')
                ->orWhere('jaminan', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $pengunjung = Pengunjung::paginate(5);
        }

        return view('pengunjung', compact(
            'pengunjung',
            'request'
        ), [
            'title' => 'Data Pengunjung'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengunjung = new Pengunjung;

        return view('pengunjungPages/create', compact('pengunjung'), [
            'title' => 'Data Pengunjung'
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
        $pengunjung = new Pengunjung;
        $pengunjung->nama = $request->nama;
        $pengunjung->email = $request->email;
        $pengunjung->alamat = $request->alamat;
        $pengunjung->jaminan = $request->jaminan;
        $pengunjung->save();

        return redirect('pengunjung');
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
        $pengunjung = Pengunjung::find($id);
        return view('pengungPages/edit', compact('pengunjung'), ['title' => 'Data Pengunjung']);
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
        $pengunjung = Pengunjung::find($id);
        $pengunjung->nama = $request->nama;
        $pengunjung->email = $request->email;
        $pengunjung->alamat = $request->alamat;
        $pengunjung->jaminan = $request->jaminan;
        $pengunjung->save();

        return redirect('pengunjung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Pengunjung::find($id);
        $buku->delete();
        return redirect('pengunjung');
    }
}
