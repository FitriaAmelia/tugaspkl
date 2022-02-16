@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



Data Transaksi

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   Beranda Data Transaksi
                    <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah transaksi</a>
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
                                <th>Nama Mobil</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th>
                                <th>Lama Pakai</th>
                                <th>Total Biaya</th>
                                <th>Nama Penyewa</th>
                                <th>Tanggal transaksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($transaksi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->mobils->nama_mobil}}</td>
                                <td>{{$data->tgl_sewa}}</td>
                                <td>{{$data->tgl_kembali}}</td>
                                <td>{{$data->lama_pakai}}</td>
                                <td>{{$data->total_biaya}}</td>
                                <td>{{$data->penyewas->nama_lengkap}}</td>
                                <td>{{$data->tgl_transaksi}}</td>
                                <td>
                                    <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        {{-- <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-outline-info">Edit</a> --}}
                                        <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        {{-- <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button> --}}
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
