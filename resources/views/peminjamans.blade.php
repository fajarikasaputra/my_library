@extends('layouts.main')

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" /> --}}

@section('container')
    <div class="d-flex justify-content-between align-items-center w-50 mb-3 mb-md-0 mt-5 ms-5">
        {{-- <label for="inputJudul">Judul Buku</label>
        <select name="buku_id"id="brow">
                @foreach ($buku as $item)
                <option value="{{ $item->id }}  "> {{ $item->judul }}</option>
                @endforeach
            </select> --}}


        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"
            rel="stylesheet" /> --}}

        <form method="POST" action="{{ url('peminjaman') }}">
            @csrf

            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <h1>Peminjaman</h1>
                                <form>
                                    <div class="form-group row">
                                        <label for="">Pilih Judul Buku</label>
                                        <div class="col-sm-10">
                                            <select name="buku_id" class="form-control selectpicker" id="select-country"
                                                data-live-search="true">
                                                @foreach ($buku as $item)
                                                    <option value="{{ $item->id }}">{{ $item->judul }}</option>
                                                @endforeach
                                            </select>
                                            <label for="inputPeminjam">Peminjam</label>

                                            <select name="pengunjung_id" class="form-control selectpicker"
                                                id="select-country" data-live-search="true">
                                                @foreach ($pengunjung as $data)
                                                    <option value="{{ $data->id }}"> {{ $data->nama }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <select name="pengunjung_id" id="brow"> --}}
                                            {{-- </select> --}}
                                            <div class="form-group">
                                                <label for="inputTanggal">Tanggal</label>
                                                <input type="date" class="form-control" id="tanggal"
                                                    placeholder="tanggal" name="tanggal_peminjaman">
                                            </div>
                                            Jumlah: <input type="text" name="jumlah"><br />

                                            <button type="submit" class="btn btn-primary">Pinjamkan</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

        </form>


    </div>
@endsection
