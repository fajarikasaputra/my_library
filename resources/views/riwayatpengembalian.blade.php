@extends('layouts.main')

@section('container')
    <div class="mx-auto" style="width: 200px;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jaminan</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Mark</td>
                    <td>KTP</td>
                    <td>21/12/22</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Mark</td>
                    <td>KTP</td>
                    <td>21/12/22</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Mark</td>
                    <td>KTP</td>
                    <td>21/12/22</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    @endsection
