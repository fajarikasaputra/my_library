@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">
        <a class="btn btn-info mt-5 mb-5" href="{{ url('pengunjung/create') }}">Tambah Pengunjung</a>
        <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Cari Pengunjung</label>
                <input type="search" class="form-control" id="inputPassword2" placeholder="Password">
            </div>
        </form>
        <table class="table">
            <thead class="table table-bordered">
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
                        <td><a class="btn btn-warning   "
                                href="{{ url('pengunjung/' . $kunjung->id . '/edit') }}">Pinjamkan</a>
                        </td>
                        <td><a class="btn btn-info" href="{{ url('pengunjung/' . $kunjung->id . '/edit') }}">Update</a>
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



    </div>
@endsection
