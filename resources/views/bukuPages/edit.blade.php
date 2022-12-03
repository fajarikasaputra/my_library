@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('buku/' . $buku->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="inputJudul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul"
                    value="{{ $buku->judul }}">
            </div>
            <div class="form-group">
                <label for="inputPenulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" placeholder="penulis" name="penulis"
                    value="{{ $buku->penulis }}">
            </div>
            <div class="form-group">
                <label for="inputPenerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" placeholder="penerbit" name="penerbit"
                    value="{{ $buku->penerbit }}">
            </div>
            <div class="form-group">
                <label for="inputTahun">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" placeholder="tahun_terbit" name="tahun_terbit"
                    value="{{ $buku->tahun_terbit }}">
            </div>
            <div class="form-group">
                <label for="inputStok">Stok</label>
                <input type="text" class="form-control" id="stok" placeholder="stok" name="stok"
                    value="{{ $buku->stok }}">
            </div>
            {{-- Judul: <input type="text" name="judul" value="{{ $buku->judul }}"><br />
            Penulis: <input type="text" name="penulis" value="{{ $buku->penulis }}"><br />
            Penerbit: <input type="text" name="penerbit" value="{{ $buku->penerbit }}"><br />
            Tahun Terbit: <input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}"><br />
            Stok: <input type="text" name="stok" value="{{ $buku->stok }}"><br /> --}}
            <button type="submit" class="btn btn-primary btn-lg">Simpan Data</button>
        </form>
    </div>
@endsection
