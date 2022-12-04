@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">
        <nav class="navbar navbar-light bg-light mt-5">
            <form action="/pengembalian" method="GET" class="form-inline">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search..">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </nav>
        <a class="btn btn-info mt-5 mb-5" href="{{ url('pengembalian/create') }}">Tambah Pengembalian</a>
        <table class="table">
            <thead class="mt-5 table ">
                <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jaminan</th>
                    <th scope="col">Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengembalian as $item)
                    <tr>
                        <th scope="row">{{ $item->peminjaman->buku->judul }}</th>
                        <td>{{ $item->peminjaman->pengunjung->nama }}</td>
                        <td>{{ $item->peminjaman->pengunjung->jaminan }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td><a class="btn btn-info" href="{{ url('pengembalian/' . $item->id . '/edit') }}">Update</a></td>
                        <td>
                            <form action="{{ url('pengembalian/' . $item->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pengembalian->links() }}
    @endsection
