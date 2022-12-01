@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('pengunjung/' . $pengunjung->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            Nama: <input type="text" name="nama" value="{{ $pengunjung->nama }}"><br />
            Email: <input type="text" name="email" value="{{ $pengunjung->email }}"><br />
            Alamat: <input type="text" name="alamat" value="{{ $pengunjung->alamat }}"><br />
            <label for="inputState">Jaminan</label>
            <select id="inputState" name="jaminan" class="form-control" value="{{ $pengunjung->alamat }}">
                <option>KTP</option>
                <option>KTM</option>
            </select>
            <button type="submit">Simpan Data</button>
        </form>
    </div>
@endsection
