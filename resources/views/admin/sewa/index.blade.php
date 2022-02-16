@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



Data Sewa

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Beranda Data Sewa
                    <a href="{{route('sewa.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Sewa</a>
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
                                <th>Nomor</th>
                                <th>No Nota</th>
                                <th>Nama Mobil</th>
                                <th>Nama Driver</th>
                                <th>Nama Penyewa</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th>
                                <th>Pembayaran</th>
                                <th>Jaminan</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($sewa as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->no_nota}}</td>
                                <td>
                                    {{$data->mobils->nama_mobil}}
                                </td>
                                {{-- <td>
                                    {{$data->drivers->nama}}
                                </td> --}}
                                <td>{{$data->penyewas->nama_lengkap}}</td>
                                 <td>{{$data->tgl_sewa}}</td>
                                <td>{{$data->tgl_kembali}}</td>
                                 <td>{{$data->pembayaran}}</td>
                                <td>{{$data->jaminan}}</td>
                                <td>{{$data->denda}}</td>
                                <td>
                                    <form action="{{route('sewa.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('sewa.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('sewa.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
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
