@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Driver</h1>
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
                <div class="card-header">Data Driver</div>
                <div class="card-body">
                    <form action="{{route('driver.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Driver :</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old("nama") }}">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                            <label for="">Alamat :</label>
                            <textarea type="file" name="alamat" class="form-control"></textarea>
                             @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    {{-- <div class="form-group">
                        <label for="">Alamat :</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old("alamat") }}">
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="">Nomor Telpon :</label>
                        <input type="text" name="no_telpon" class="form-control @error('no_telpon') is-invalid @enderror" value="{{ old("no_telpon") }}">
                        @error('no_telpon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        <a href="{{ route("driver.index") }}" class="btn btn-outline-info">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
