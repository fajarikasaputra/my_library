@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('buku') }}">
            @csrf
            Judul: <input type="text" name="judul"><br />
            Penulis: <input type="text" name="penulis"><br />
            Penerbit: <input type="text" name="penerbit"><br />
            Tahun Terbit: <input type="text" name="tahun_terbit"><br />
            Stok: <input type="text" name="stok"><br />
            <button type="submit">Simpan Data</button>
        </form>
    </div>
@endsection
