@extends('layouts.main')

@section('container')
    <br />
    <form metod="POST" action="{{ url('buku') }}">
        @csrf
        Judul: <input type="text" name="judul"><br />
        Penerbit: <input type="text" name="penerbit"><br />
        Penulis: <input type="text" name="penulis"><br />
        Tahun Terbit: <input type="date" name="tahun_terbit"><br />
        Stok: <input type="text" name="stok"><br />
        <button type="submit">Simpan Data</button>
    </form>
@endsection
