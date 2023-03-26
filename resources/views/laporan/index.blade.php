@extends('layouts.apps')
@section('content')



<div class="container mt-5">

    <div class="mb-2">
        <h1>Hasil Laporan</h1>
    </div>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nomor Kredit Nasbah</th>
                <th scope="col">Tanggal Kunjungan</th>
                <th scope="col">Hasil Laporan</th>

            </tr>
        </thead>
        <tbody>
            @foreach($laporan as $laporans)


            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $laporans->nomer_kredit }}</td>
                <td>{{ $laporans->tanggal_kunjungan }}</td>
                {{-- <td> <iframe
                        src="https://www.google.com/maps?q={{ $laporans->latitude }},{{ $laporans->longitude }}&hl=es;z=14&amp;output=embed"
                        width="100%" height="100%"></iframe></td> --}}
                <td> <a href="/laporan/{{ $laporans->id }}"><span class="badge bg-primary">detail laporan</span></a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>


</div>



@endsection