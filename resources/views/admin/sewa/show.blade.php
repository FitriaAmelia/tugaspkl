@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Sewa</h1>
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
                    <div class="form-group">
                        <label for="">No Nota</label>
                        <input type="text" name="no_nota" class="form-control" value="{{$sewa->no_nota}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">No Mobil</label>
                        <input type="text" name="" class="form-control" value="{{$sewa->mobil_no}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Driver</label>
                        <input type="text" name="" class="form-control" value="{{$sewa->driver_id}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Penyewa</label>
                        <input type="text" name="" class="form-control" value="{{$sewa->penyewa_id}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Sewa</label>
                        <input type="date" name="tgl_sewa" value="{{$sewa->tgl_sewa}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" value="{{$sewa->tgl_kembali}}" class="form-control" readonly>
                    </div>
                     <div class="form-group">
                        <label for="">Pembayaran</label>
                        <input type="text" name="pembayaran" value="{{$sewa->pembayaran}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jaminan</label>
                        <input type="text" name="jaminan" value="{{$sewa->jaminan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Denda</label>
                        <input type="text" name="denda" value="{{$sewa->denda}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/sewa')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
