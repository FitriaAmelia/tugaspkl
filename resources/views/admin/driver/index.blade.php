@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



Data Driver

@endsection
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Driver</h1>
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
                <div class="card-header">
                   Beranda Data Driver
                    <a href="{{route('driver.create')}}" class="float-right btn btn-sm btn-outline-primary">Tambah Driver</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive table-striped">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Driver</th>
                                <th>Alamat Driver</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>

                            </tr>
                            @php $no=1; @endphp
                            @foreach($driver as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td>{{$data->no_telpon}}</td>


                                    <td>
                                        <a href="{{route('driver.edit', $data->id)}}" class="mb-2 btn btn-outline-info">Edit</a>
                                        <form action="{{route('driver.destroy', $data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $driver->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
