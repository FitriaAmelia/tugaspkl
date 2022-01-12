@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Mobil</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mobil</div>
                <div class="card-body">
                   <form action="{{route('mobil.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Plat Nomor Mobil</label>
                            <input type="text" name="no_mobil" class="form-control @error('no_mobil') is-invalid @enderror">
                             @error('no_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Merk Mobil</label>
                            <input type="text" name="nama_mobil" class="form-control @error('nama_mobil') is-invalid @enderror">
                             @error('nama_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Mobil</label>
                            <input type="text" name="jenis_mobil" class="form-control @error('jenis_mobil') is-invalid @enderror">
                             @error('jenis_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Pembuatan Mobil</label>
                            <input type="number" name="tahun_pembuatan" class="form-control @error('tahun_pembuatan') is-invalid @enderror">
                             @error('tahun_pembuatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Harga Rental Mobil</label>
                            <input type="text" name="harga_sewa" class="form-control @error('harga_sewa') is-invalid @enderror">
                             @error('harga_sewa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kapasitas Penumpang</label>
                            <input type="text" name="kapasitas_penumpang" class="form-control @error('kapasitas_penumpang') is-invalid @enderror">
                             @error('kapasitas_penumpang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Fasilitas Mobil</label>
                            <input type="text" name="fasilitas_mobil" class="form-control @error('fasilitas_mobil') is-invalid @enderror">
                             @error('fasilitas_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Status Mobil</label>
                            <input type="text" name="status_mobil" class="form-control @error('status_mobil') is-invalid @enderror">
                             @error('status_mobil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Gambar Mobil</label>
                            <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                             @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
