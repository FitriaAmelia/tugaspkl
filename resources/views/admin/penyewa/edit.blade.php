@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Penyewa</h1>
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
                <div class="card-header"> Data Penyewa</div>
                <div class="card-body">
                    <form action="{{route('penyewa.update', $penyewa->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Penyewa :</label>
                            <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ $penyewa->nama_lengkap }}">
                            @error('nama_lengkap')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password :</label>
                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ $penyewa->password }}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email :</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $penyewa->email}}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Jenis Kelamin :</label>
                            <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror" value="{{ $penyewa->jk }}">
                            @error('jk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan :</label>
                            <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ $penyewa->pekerjaan }}">
                            @error('pekerjaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Alamat :</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $penyewa->alamat}}">
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Kota :</label>
                            <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ $penyewa->kota }}">
                            @error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi :</label>
                            <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" value="{{ $penyewa->provinsi}}">
                            @error('provinsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>



                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            <a href="{{ route("penyewa.index") }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


