<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index(Request $request)
    {
        if ($request->has('search')) {
            $buku = Buku::where('judul', 'LIKE', '%' . $request->search . '%')
                ->orWhere('penulis', 'LIKE', '%' . request('search') . '%')
                ->orWhere('penerbit', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tahun_terbit', 'LIKE', '%' . request('search') . '%')
                ->orWhere('stok', 'LIKE', '%' . request('search') . '%')
                ->orderBy('judul')
                ->paginate(5);
        } else {
            $buku = Buku::orderBy('judul', 'ASC')->paginate(5);
        }
        return view('buku', compact(
            'buku'
        ), [
            'title' => 'Data Buku'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = new Buku;
        return view(
            'bukuPages/create',
            compact(
                'buku'
            ),
            [
                'title' => 'Data Buku'
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
        $data = Buku::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('coverbuku/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect('buku');
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
        return view(
            'bukuPages/edit',
            compact(
                'buku'
            ),
            [
                'title' => 'Data Buku'
            ]
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
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->isbn = $request->isbn;
        $buku->foto = $request->foto;
        $buku->penulis = $request->penulis;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->stok = $request->stok;

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('coverbuku/', $request->file('foto')->getClientOriginalName());
            $buku->foto = $request->file('foto')->getClientOriginalName();
        }
        $buku->save();
        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('buku');
    }
}
