@extends('kendaraan.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
        <h2>Sistem Informasi Pencatatan Kendaraan Masuk dan Keluar</h2>
    </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('kendaraan.create') }}"> Input Kendaraan</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>jenis_kendaraan</th>
        <th>plat_kendaraan</th>
        <th>foto_kendaraan</th>
        <th>status_kendaraan</th>
        <th>Masuk</th>
        <th>Keluar</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($kendaraan as $kdr)
    <tr>
        <td>{{ $kdr ->jenis_kendaraan }}</td>
        <td>{{ $kdr ->plat_kendaraan }}</td>
        <td>{{ $kdr ->foto_kendaraan }}</td>
        <td>{{ $kdr ->status_kendaraan }}</td>
        <td>{{ $kdr ->created_at }}</td>
        <td>{{ $kdr ->updated_at }}</td>
        <td>
            <form action="{{ route('kendaraan.destroy',['kendaraan'=>$kdr->plat_kendaraan]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('kendaraan.show',$kdr->plat_kendaraan) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('kendaraan.edit',$kdr->plat_kendaraan) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection