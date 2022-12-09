@extends('layouts.main')

@section('container')
    <div class="mx-auto mt-5" style="width: 900px;">
        <nav class="navbar navbar-light bg-light mt-5">
            <form action="/user" method="GET" class="form-inline">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search..">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </nav>
        <a class="btn btn-success mt-5 mb-5" href="{{ url('user/create') }}">Tambah User</a>
        <br />
        <br />
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID User</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="colspan-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $userk)
                    <tr>
                        <th scope="row">{{ $userk->id }}</th>
                        <td>{{ $userk->name }}</td>
                        <td>{{ $userk->level }}</td>
                        <td>{{ $userk->email }}</td>
                        <td>{{ $userk->password }}</td>

                        <td><a class="btn btn-warning" href="{{ url('user/' . $userk->id . '/edit') }}">Update</a></td>
                        <td>
                            <form action="{{ url('user/' . $userk->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $user->links() }} --}}
        {{ $user->appends(Request::except('page'))->links() }}

    </div>
@endsection
