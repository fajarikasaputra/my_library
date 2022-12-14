@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">

        <nav class="navbar navbar-light bg-light mt-5">
            <form action="/pengunjung" method="GET" class="form-inline">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search..">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </nav>
        <a class="btn btn-success mt-5 mb-5" href="{{ url('pengunjung/create') }}">Tambah Pengunjung</a>
        <br />
        <br />
        <table class="table mt-5">
            <thead class="table">
                <tr>
                    <th scope="col">ID Pengunjung</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jaminan</th>
                    <th scope="col">Aksi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengunjung as $kunjung)
                    <tr>
                        <th scope="row">{{ $kunjung->id }}</th>
                        <td>{{ $kunjung->nama }}</td>
                        <td>{{ $kunjung->email }}</td>
                        <td>{{ $kunjung->alamat }}</td>
                        <td>{{ $kunjung->jaminan }}</td>

                        <td><a class="btn btn-warning" href="{{ url('pengunjung/' . $kunjung->id . '/edit') }}">Update</a>
                        </td>
                        <td>
                            <form action="{{ url('pengunjung/' . $kunjung->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $pengunjung->links() }} --}}
        {{ $pengunjung->appends(Request::except('page'))->links() }}



    </div>
@endsection
