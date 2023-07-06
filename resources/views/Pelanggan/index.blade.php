@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>
            Daftar Pelanggan
            <a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <td>ID PELANGGAN</td>
                <td>NOMOR</td>
                <td>NAMA LENGKAP</td>
                <td>ALAMAT</td>
                <td>NO. HP</td>
                <td>ID KTP</td>
                <td>NO. SERI</td>
                <td>METERAN</td>
                <td>STATUS</td>
                <td>PEL. ID</td>
                <td>Edit</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->pel_id_gol }}</td>
                    <td>{{ $row->pel_no }}</td>
                    <td>{{ $row->pel_nama }}</td>
                    <td>{{ $row->pel_alamat }}</td>
                    <td>{{ $row->pel_hp }}</td>
                    <td>{{ $row->pel_ktp }}</td>
                    <td>{{ $row->pel_seri }}</td>
                    <td>{{ $row->pel_meteran }}</td>
                    <td>{{ $row->pel_aktif }}</td>
                    <td>{{ $row->pel_id_user }}</td>
                    <td>
                        <center><a class="btn btn-primary btn-sm float-none"
                                href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a></center>
                    </td>
                    <td>
                        <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
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
