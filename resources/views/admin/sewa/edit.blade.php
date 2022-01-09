@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Sewa</h1>
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
                <div class="card-header">Data Sewa</div>
                <div class="card-body">
                   <form action="{{route('sewa.update',$sewa->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan No Nota</label>
                            <input type="text" name="no_nota" value="{{$sewa->no_nota}}" class="form-control @error('no_nota') is-invalid @enderror">
                             @error('no_nota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Mobil</label>
                            <select name="mobil_no" class="form-control @error('mobil_no') is-invalid @enderror" >
                                @foreach($mobil as $data)
                                    <option value="{{$data->id}}" {{$data->id == $sewa->mobil_no ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('mobil_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ID Driver</label>
                            <select name="driver_id" class="form-control @error('driver_id') is-invalid @enderror" >
                                @foreach($driver as $data)
                                    <option value="{{$data->id}}" {{$data->id == $sewa->driver_id ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('driver_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ID Penyewa</label>
                            <select name="penyewa_id" class="form-control @error('penyewa_id') is-invalid @enderror" >
                                @foreach($penyewa as $data)
                                    <option value="{{$data->id}}" {{$data->id == $sewa->penyewa_id ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('penyewa_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tangggal Sewa</label>
                            <input type="date" name="tgl_sewa" value="{{$sewa->tgl_sewa}}" class="form-control @error('tgl_sewa') is-invalid @enderror">
                             @error('tgl_sewa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tangggal Kembali</label>
                            <input type="date" name="tgl_kembali" value="{{$sewa->tgl_kembali}}" class="form-control @error('tgl_kembali') is-invalid @enderror">
                             @error('tgl_kembali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Pembayaran</label>
                            <input type="text" name="pembayaran" value="{{$sewa->pembayaran}}" class="form-control @error('pembayaran') is-invalid @enderror">
                             @error('pembayaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jaminan</label>
                            <input type="text" name="jaminan" value="{{$sewa->jaminan}}" class="form-control @error('jaminan') is-invalid @enderror">
                             @error('jaminan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Denda</label>
                            <input type="text" name="denda" value="{{$sewa->denda}}" class="form-control @error('denda') is-invalid @enderror">
                             @error('denda')
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

