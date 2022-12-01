@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between align-items-center w-50 mb-3 mb-md-0 mt-5 ms-5">
        <h1>Peminjaman</h1>
        <form method="POST" action="{{ url('peminjaman') }}">
            @csrf
            <label for="inputJudul">Judul Buku</label>
            <select name="buku_id"id="brow">
                @foreach ($buku as $item)
                    <option value="{{ $item->id }}  "> {{ $item->judul }}</option>
                @endforeach
            </select>

            <label for="inputPeminjam">Peminjam</label>

            <select name="pengunjung_id" id="brow">
                @foreach ($pengunjung as $data)
                    <option value="{{ $data->id }}"> {{ $data->nama }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="inputTanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal_peminjaman">
            </div>
            Jumlah: <input type="text" name="jumlah"><br />

            <button type="submit" class="btn btn-primary">Pinjamkan</button>
        </form>


    </div>
@endsection
