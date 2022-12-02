@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">
        <table class="table">
            <thead class="table table-bordered">
                <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jaminan</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayat_peminjaman as $item)
                    <tr>
                        <th scope="row">{{ $item->buku->judul }}</th>
                        <td>{{ $item->pengunjung->nama }}</td>
                        <td>{{ $item->pengunjung->jaminan }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>{{ $item->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
