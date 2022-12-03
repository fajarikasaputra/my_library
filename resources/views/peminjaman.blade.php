@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">
        <a class="btn btn-info mt-5 mb-5" href="{{ url('peminjaman/create') }}">Tambah Peminjam</a>
        <table class="table">
            <thead class="mt-5 table ">
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
                        <th scope="row">{{ $item->buku->judul }}</th>
                        <td>{{ $item->pengunjung->nama }}</td>
                        <td>{{ $item->pengunjung->jaminan }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td><a class="btn btn-info" href="{{ url('peminjaman/' . $item->id . '/edit') }}">Update</a></td>
                        <td>
                            <form action="{{ url('peminjaman/' . $item->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
