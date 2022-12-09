@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('user/' . $user->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="inputJudul">Nama</label>
                <input type="text" class="form-control" id="judul" placeholder="Nama" name="name"
                    value={{ $user->name }}>
            </div>
            <div class="form-group">
                <label for="inputPenulis">Email</label>
                <input type="text" class="form-control" id="penulis" placeholder="Email" name="email"
                    value={{ $user->email }}>
            </div>
            <div class="form-group">
                <label for="inputPenulis">Level</label>
                <input type="text" class="form-control" id="penulis" placeholder="Level" name="level"
                    value={{ $user->level }}>
            </div>
            <div class="form-group">
                <label for="inputPenerbit">Password</label>
                <input type="password" class="form-control" id="penerbit" placeholder="Password" name="password"
                    value={{ $user->password }}>
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
