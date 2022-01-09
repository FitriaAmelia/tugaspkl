@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Transaksi</h1>
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
                    <div class="form-group">
                        <label for="">No Mobil</label>
                        <input type="text" name="" class="form-control" value="{{$transaksi->mobil_no}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Sewa</label>
                        <input type="date" name="tgl_sewa" value="{{$transaksi->tgl_sewa}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" value="{{$transaksi->tgl_kembali}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Lama Pakai</label>
                        <input type="text" name="lama_pakai" class="form-control" value="{{$transaksi->lama_pakai}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Total Biaya</label>
                        <input type="text" name="total_biaya" class="form-control" value="{{$transaksi->total_biaya}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">ID Penyewa</label>
                        <input type="text" name="" class="form-control" value="{{$transaksi->penyewa_id}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal transaksi</label>
                        <input type="date" name="tgl_transaksi" value="{{$transaksi->tgl_transaksi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/transaksi')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
