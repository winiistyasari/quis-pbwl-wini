@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>
            Daftar Golongan
            <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <td>KODE GOLONGAN</td>
                <td>NAMA GOLONGAN</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->gol_kode }}</td>
                    <td>{{ $row->gol_nama }}</td>
                    <td><center><a class="btn btn-primary btn-sm float-none" href="{{ url('golongan/' . $row->gol_id . '/edit') }}">Edit</a></center></td>
                    <td>
                        <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <center><button class="btn btn-primary btn-sm float-none">Hapus</button></center>
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection