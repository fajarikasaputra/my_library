@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between align-items-center w-50 mb-3 mb-md-0 mt-5">
        <h1>Peminjaman</h1>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Jaminan</label>
                <select id="inputState" class="form-control">
                    <option selected>KTP</option>
                    <option>KTM</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Buku yang ingin dikembalikan</label>
                <select id="inputState" class="form-control">
                    <option selected>Harry Potter</option>
                    <option>Tenggeamnya Kapal Van Der Wijk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputTanggal">Tanggal</label>
                <input type="date" class="form-control" id="inputTanggal" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Kembalikan</button>
        </form>
    </div>
@endsection
