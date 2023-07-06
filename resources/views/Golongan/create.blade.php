@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Golongan</h3>
        <form action="{{ url('/golongan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>KODE GOLONGAN</label>
                <input type="text" class="form-control" name="gol_kode">
            </div>
            <div class="mb-3">
                <label>NAMA GOLONGAN</label>
                <input type="text" class="form-control" name="gol_nama">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-end" type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection