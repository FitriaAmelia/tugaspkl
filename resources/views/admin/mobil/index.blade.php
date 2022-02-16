@extends('adminlte::page')

@section('title', 'Data Mobil')

@section('content_header')

Data Mobil

@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script src="{{asset('js/delete.js')}}"></script>
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   Beranda Data Mobil
                    <a href="{{route('mobil.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Mobil</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Plat Nomor Mobil</th>
                                <th>Merk Mobil</th>
                                <th>Jenis Mobil</th>
                                <th>Tahun Pembuatan Mobil</th>
                                <th>Harga Rental Mobil</th>
                                <th>Kapasitas Penumpang</th>
                                <th>Fasilitas Mobil</th>
                                <th>Status Mobil</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($mobil as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->no_mobil}}</td>
                                <td>{{$data->nama_mobil}}</td>
                                <td>{{$data->jenis_mobil}}</td>
                                <td>{{$data->tahun_pembuatan}}</td>
                                <td>{{$data->harga_sewa}}</td>
                                <td>{{$data->kapasitas_penumpang}}</td>
                                <td>{{$data->fasilitas_mobil}}</td>
                                <td>{{$data->status_mobil}}</td>
                                <td><img src="{{$data->image()}}" alt="" style="width:160px; height:100px;" alt="Gambar"></td>
                                <td>
                                    <form action="{{route('mobil.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('mobil.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('mobil.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger delete-confirm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
