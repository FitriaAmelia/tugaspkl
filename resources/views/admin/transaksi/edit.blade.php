@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Rransaksi</h1>
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
                <div class="card-header">Data Transaksi</div>
                <div class="card-body">
                   <form action="{{route('transaksi.update',$transaksi->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">No Mobil</label>
                            <select name="mobil_no" class="form-control @error('mobil_no') is-invalid @enderror" >
                                @foreach($mobil as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->mobil_no ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('mobil_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tangggal Sewa</label>
                            <input type="date" name="tgl_sewa" value="{{$transaksi->tgl_sewa}}" class="form-control @error('tgl_sewa') is-invalid @enderror">
                             @error('tgl_sewa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tangggal Kembali</label>
                            <input type="date" name="tgl_kembali" value="{{$transaksi->tgl_kembali}}" class="form-control @error('tgl_kembali') is-invalid @enderror">
                             @error('tgl_kembali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Lama Pakai</label>
                            <input type="text" name="lama_pakai" value="{{$transaksi->lama_pakai}}" class="form-control @error('lama_pakai') is-invalid @enderror">
                             @error('lama_pakai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Total Biaya</label>
                            <input type="text" name="total_biaya" value="{{$transaksi->total_biaya}}" class="form-control @error('total_biaya') is-invalid @enderror">
                             @error('total_biaya')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ID Penyewa</label>
                            <select name="penyewa_id" class="form-control @error('penyewa_id') is-invalid @enderror" >
                                @foreach($penyewa as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->penyewa_id ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('penyewa_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Tangggal Transaksi</label>
                            <input type="date" name="tgl_transaksi" value="{{$transaksi->tgl_transaksi}}" class="form-control @error('tgl_transaksi') is-invalid @enderror">
                             @error('tgl_transaksi')
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

