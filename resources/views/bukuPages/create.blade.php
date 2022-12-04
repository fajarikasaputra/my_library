@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('buku') }}">
            @csrf
            <div class="form-group">
                <label for="inputJudul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul" name="Judul">
            </div>
            <div class="form-group">
                <label for="inputPenulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" placeholder="penulis" name="Penulis">
            </div>
            <div class="form-group">
                <label for="inputPenerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" placeholder="penerbit" name="Penerbit">
            </div>
            <div class="form-group">
                <label for="inputTahun">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit" name="tahun_terbit">
            </div>
            <div class="form-group">
                <label for="inputStok">Stok</label>
                <input type="text" class="form-control" id="stok" placeholder="Stok" name="stok">
            </div>
            {{-- Judul: <input type="text" name="judul"><br />
            Penulis: <input type="text" name="penulis"><br />
            Penerbit: <input type="text" name="penerbit"><br />
            Tahun Terbit: <input type="text" name="tahun_terbit"><br />
            Stok: <input type="text" name="stok"><br /> --}}
            <br />
            <button type="submit" class="btn btn-primary ">Simpan Data</button>
        </form>
    </div>
@endsection
