@extends('layouts.apps')
@section('content')



<div class="container mt-5">

    <div class="mb-2">
        <h1>Hasil Laporan </h1>
    </div>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Nama Nasabah</th>
                <th scope="col">Hasil Laporan</th>

            </tr>
        </thead>
        <tbody>
            @foreach($laporan as $laporans)

            @endforeach
            <tr>
                <th scope="row">{{ $iter }}</th>
                <td>Nama Pegawai Testing</td>
                <td>Nama Nasabah Testing</td>

                <td> <a href=""><span class="badge bg-primary">detail laporan</span></a></td>
            </tr>

        </tbody>
    </table>


</div>



@endsection