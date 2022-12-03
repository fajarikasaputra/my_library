@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">
        <a class="btn btn-info mt-5 mb-5" href="{{ url('buku/create') }}">Tambah Buku</a>
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
                        <th scope="row">1</th>
                        <td>Yoi</td>
                        </td>
                        <td>Kelas</td>
                        <td>12</td>
                        <td>12</td>
                        <td>10</td>
                        <td><a class="btn btn-info" href="{{ url('buku/' . $bukuku->id . '/edit') }}">Update</a></td>
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



    </div>
@endsection
