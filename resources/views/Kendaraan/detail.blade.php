@extends('kendaraan.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Kendaraan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Jenis: </b>{{$Kendaraan->jenis_kendaraan}}</li>
                    <li class="list-group-item"><b>Nomor Plat: </b>{{$Kendaraan->plat_kendaraan}}</li>
                    <li class="list-group-item"><b>Foto: </b>{{$Kendaraan->foto_kendaraan}}</li>
                    <li class="list-group-item"><b>Status: </b>{{$Kendaraan->status_kendaraan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('kendaraan.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection