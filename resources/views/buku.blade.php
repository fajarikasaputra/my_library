@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">
        <nav class="navbar navbar-light bg-light mt-5">
            <form action="/buku" method="GET" class="form-inline">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search..">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </nav>
        <a class="btn btn-success mt-5 mb-5" href="{{ url('buku/create') }}">Tambah Buku</a>
        <br />
        <br />
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun terbit</th>
                    <th scope="col">Stok</th>
                    <th scope="colspan-2">Aksi</th>
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
                        <td><a class="btn btn-warning" href="{{ url('buku/' . $bukuku->id . '/edit') }}">Update</a></td>
                        <td>
                            <form action="{{ url('buku/' . $bukuku->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $buku->links() }}



    </div>
@endsection
