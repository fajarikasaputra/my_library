@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between align-items-center w-50 mb-3 mb-md-0 mt-5 ms-5">
        <h1>Pengembalian</h1>
        <form method="POST" action="{{ url('pengembalian') }}">
            @csrf
            <label for="inputJudul">Judul Buku</label>
            <select name="buku_id"id="brow">
                @foreach ($peminjam as $item)
                    <option value="{{ $item->buku->id }}  "> {{ $item->buku->judul }}</option>
                @endforeach
            </select>

            <label for="inputPengembali">Peminjam</label>

            {{-- @dd($peminjam) --}}
            <select name="pengunjung_id" id="brow">
                @foreach ($peminjam as $data)
                    <option value="{{ $data->pengunjung->id }}"> {{ $data->pengunjung->nama }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="inputTanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal_pengembalian">
            </div>
            Jumlah: <input type="text" name="jumlah"><br />

            <button type="submit" class="btn btn-primary">Kembalikan</button>
        </form>


    </div>
@endsection
