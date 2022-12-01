@extends('layouts.main')

@section('container')
    <div class="mx-auto" style="width: 200px;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jaminan</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $item)
                    <tr>
                        <th scope="row">{{ $peminjaman->id }}</th>
                        <td>{{ $peminjaman->judul }}</td>
                        <td>{{ $peminjaman->jaminan }}</td>
                        <td>{{ $peminjaman->tanggal }}</td>
                        <td>{{ $peminjaman->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
