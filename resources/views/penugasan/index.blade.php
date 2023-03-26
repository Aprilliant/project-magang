@extends('layouts.apps')
@section('content')


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Nama Nasabah</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penugasan as $task)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $task->user->name }}</td>
            <td>{{ $task->data_nasabah->nama }} </td>
            {{-- <td><a href="{{ route('/penugasan', ['id' => $pegawai->id]) }}">Input Laporan</a></td> --}}
            <td> <a href="{{ route('laporan.create') }} "><span class="badge bg-primary">Laporan</span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection