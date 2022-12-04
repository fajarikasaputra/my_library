@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('pengunjung') }}">
            @csrf
            <div class="form-group">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Pengunjung" name="nama">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email Pengunjung" name="email">
            </div>
            <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat Pengunjung" name="alamat">
            </div>
            <div class="form-group">
                <label for="inputTanggal">Jaminan</label>
                <select id="inputState" name="jaminan" class="form-control">
                    <option>KTP</option>
                    <option>KTM</option>
                </select>
            </div>
            {{-- Nama: <input type="text" name="nama"><br />
            Email: <input type="text" name="email"><br />
            Alamat: <input type="text" name="alamat"><br />
            <label for="inputState">Jaminan</label>
            <select id="inputState" name="jaminan" class="form-control">
                <option>KTP</option>
                <option>KTM</option>
            </select> --}}
            <br />
            <button type="submit" class="btn btn-primary">Simpan Data Pengunjung</button>
        </form>
    </div>
@endsection
