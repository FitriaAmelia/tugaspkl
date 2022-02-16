@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<center><b>SELAMAT DATANG DIRENTAL MOBIL KAMI</b></center><br>

@endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
                  <sup style="font-size: 20px"></sup>
              <p>Lihat Mobil</p>
              <h4>{{ DB::table('mobils')->count() }}</h4>
            </span>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="admin/mobil" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
                <sup style="font-size: 20px"></sup>
              <p>Sewa Mobil</p>
              <h4>{{ DB::table('sewas')->count() }}</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="admin/sewa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
                <sup style="font-size: 20px"></sup>
              <p>Data Driver</p>
              <h4>{{ DB::table('drivers')->count() }}</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('driver.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
                <sup style="font-size: 20px"></sup>
              <p>Data Transaksi</p>
              <h4>{{ DB::table('transaksis')->count() }}</h4>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="admin/transaksi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

@endsection

@section('css')

@endsection

@section('js')

@endsection
