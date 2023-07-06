@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>ID PELANGGAN</label>
                <input type="text" class="form-control" name="pel_id_gol" value="{{ $row->pel_id_gol }}"></>
            </div>
            <div class="mb-3">
                <label>NOMOR</label>
                <input type="text" class="form-control" name="pel_no" value="{{ $row->pel_no }}"></>
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control" name="pel_nama"value="{{ $row->pel_nama }}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <textarea class="form-control" name="pel_alamat">{{ $row->pel_alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>NO. HP</label>
                <input type="text" class="form-control" name="pel_hp"value="{{ $row->pel_hp }}"></>
            </div>
            <div class="mb-3">
                <label>ID KTP</label>
                <input type="text" class="form-control" name="pel_ktp"value="{{ $row->pel_ktp }}"></>
            </div>
            <div class="mb-3">
                <label>NO. SERI</label>
                <input type="text" class="form-control" name="pel_seri"value="{{ $row->pel_seri }}"></>
            </div>
            <div class="mb-3">
                <label>METERAN</label>
                <input type="text" class="form-control" name="pel_meteran"value="{{ $row->pel_meteran }}"></>
            </div>
            <div class="form-control">
                <label>STATUS</label>
                
                <br>
                <input type="radio"  name="pel_aktif" value="Y"> Ya
                <br>
                <br>
                <input type="radio" name="pel_aktif" value="N"> Tidak
                <br>
            </div>
            <div class="mb-3">
                <label>PEL. ID</label>
                <input type="text" class="form-control" name="pel_id_user">            
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-end" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection