@extends('kendaraan.layout')
@section('content')
<div class="container mt-5"><div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
        <div class="card-header">
            Edit Kendaraan
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
            <form method="post" action="{{ route('kendaraan.update', $Kendaraan->plat_kendaraan) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                    <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan" value="{{ $Kendaraan-
                    >jenis_kendaraan }}" aria-describedby="jenis_kendaraan" >
                </div>
                <div class="form-group">
                    <label for="plat_kendaraan">Plat Kendaraan</label>
                    <input type="text" name="plat_kendaraan" class="form-control" id="plat_kendaraan" value="{{ $Kendaraan-
                    >plat_kendaraan }}" aria-describedby="plat_kendaraan" >
                </div>
                <div class="form-group">
                    <label for="foto">Foto Kendaraan</label>
                    <input type="foto" name="foto" class="form-control" id="foto" value="{{ $Kendaraan-
                    >foto_kendaraan }}" aria-describedby="foto" >
                </div>
                <div class="form-group">
                    <label for="status">Status Kendaraan</label>
                    <input type="status" name="status" class="form-control" id="status" value="{{ $Kendaraan-
                    >status_kendaraan }}" aria-describedby="status" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection