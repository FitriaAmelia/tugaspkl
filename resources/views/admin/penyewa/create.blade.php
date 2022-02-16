@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Penyewa</h1>
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
                <div class="card-header">Data Penyewa</div>
                <div class="card-body">
                    <form action="{{route('penyewa.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Penyewa :</label>
                        <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old("nama_lengkap") }}">
                        @error('nama_lengkap')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password :</label>
                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old("password") }}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email :</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old("email") }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                            <label for="jk">Jenis Kelamin :</label> <br>
                        <div class="form-check form-check-inline">
                            <label for="status_mobil">
                                <input type="radio" name="jk" value="Laki-laki" id="jk">Laki-laki
                                <input type="radio" name="jk" value="Perempuan" id="jk">Perempuan

                            </label>
                            </div>
                        </div>
                    {{-- <div class="form-group">
                        <label for="">Jenis Kelamin :</label>
                        <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror" value="{{ old("jk") }}">
                        @error('jk')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="">Pekerjaan :</label>
                        <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ old("pekerjaan") }}">
                        @error('pekerjaan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                         <div class="form-group">
                            <label for="">Alamat :</label>
                            <textarea type="file" name="alamat" class="form-control"></textarea>
                             @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    {{-- </div>
                    <div class="form-group">
                        <label for="">Alamat :</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old("alamat") }}">
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label for="">Kota :</label>
                        <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ old("kota") }}">
                        @error('kota')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Provinsi :</label>
                        <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" value="{{ old("provinsi") }}">
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
