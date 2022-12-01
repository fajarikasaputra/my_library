@extends('layouts.main')

@section('container')
    <br />
    <div class="mx-auto mt-5" style="width: 900px;">
        <form method="POST" action="{{ url('pengunjung') }}">
            @csrf
            Nama: <input type="text" name="nama"><br />
            Email: <input type="text" name="email"><br />
            Alamat: <input type="text" name="alamat"><br />
            <label for="inputState">Jaminan</label>
            <select id="inputState" name="jaminan" class="form-control">
                <option>KTP</option>
                <option>KTM</option>
            </select>
            <button type="submit">Simpan Data</button>
        </form>
    </div>
@endsection
