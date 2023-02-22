@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('user') }}">
            @csrf
            <div class="form-group">
                <label for="inputJudul">Nama</label>
                <input type="text" class="form-control" id="judul" placeholder="Nama" name="name">
            </div>
            <div class="form-group">
                <label for="inputPenulis">Email</label>
                <input type="text" class="form-control" id="penulis" placeholder="email" name="email">
            </div>
            <label for="inputPenulis">Level</label>
            <select id="inputState" name="level" class="form-control">
                <option>admin</option>
                <option>pustakawan</option>
            </select>
            <div class="form-group">
                <label for="inputPenerbit">Password</label>
                <input type="password" class="form-control" id="penerbit" placeholder="password" name="password">
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
