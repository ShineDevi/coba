@extends('kendaraan.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Kendaraan
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('kendaraan.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan" aria-describedby="jenis_kendaraan" >
                    </div>
                    <div class="form-group">
                        <label for="plat_kendaraan">Nomor Plat</label>
                        <input type="plat_kendaraan" name="plat_kendaraan" class="form-control" id="plat_kendaraan" ariadescribedby="plat_kendaraan" >
                    </div>
                    <div class="form-group">
                        <label for="foto_kendaraan">Foto Kendaraan</label>
                        <input type="foto_kendaraan" name="foto_kendaraan" class="form-control" id="foto_kendaraan" ariadescribedby="foto_kendaraan" >
                    </div>
                    <div class="form-group">
                        <label for="status_kendaraan">Status</label>
                        <input type="status_kendaraan" name="status_kendaraan" class="form-control" id="status_kendaraan" ariadescribedby="status_kendaraan" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection