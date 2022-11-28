@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('buku/' . $buku->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            Judul: <input type="text" name="judul" value="{{ $buku->judul }}"><br />
            Penulis: <input type="text" name="penulis" value="{{ $buku->penulis }}"><br />
            Penerbit: <input type="text" name="penerbit" value="{{ $buku->penerbit }}"><br />
            Tahun Terbit: <input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}"><br />
            Stok: <input type="text" name="stok" value="{{ $buku->stok }}"><br />
            <button type="submit">Simpan Data</button>
        </form>
    </div>
@endsection
