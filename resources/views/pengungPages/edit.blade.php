@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('pengunjung/' . $pengunjung->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="inputNama">Nama Pengunjung</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Pengunjung" name="nama"
                    value="{{ $pengunjung->nama }}">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email Pengunjung" name="email"
                    value="{{ $pengunjung->email }}">
            </div>
            <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat Pengunjung" name="alanat"
                    value="{{ $pengunjung->alamat }}">
            </div>
            {{-- Nama: <input type="text" name="nama" value="{{ $pengunjung->nama }}"><br />
            Email: <input type="text" name="email" value="{{ $pengunjung->email }}"><br />
            Alamat: <input type="text" name="alamat" value="{{ $pengunjung->alamat }}"><br /> --}}
            <label for="inputState">Jaminan</label>
            <select id="inputState" name="jaminan" class="form-control" value="{{ $pengunjung->alamat }}">
                <option>KTP</option>
                <option>KTM</option>
            </select> <br />
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
