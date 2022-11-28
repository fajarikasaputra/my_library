@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">
        <a class="btn btn-info" href="{{ url('buku/create') }}">Tambah Buku</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun terbit</th>
                    <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $bukuku)
                    <tr>
                        <th scope="row">{{ $bukuku->id }}</th>
                        <td>{{ $bukuku->judul }}</td>
                        <td>{{ $bukuku->penulis }}</td>
                        <td>{{ $bukuku->penerbit }}</td>
                        <td>{{ $bukuku->tahun_terbit }}</td>
                        <td>{{ $bukuku->stok }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
