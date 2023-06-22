@extends('layouts.apps')

@section('content')


<div class="mb-4">
    <label for="isi_pesan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil
        Laporan</label>
    <form action="{{ route('wa.update', 1) }}" method="POST">
        @csrf
        @method('PATCH')
        <input id="isi_pesan" type="hidden" name="isi_pesan" required value="{{ $isi_pesan }}">
        <trix-editor input="isi_pesan"></trix-editor>
        <button type="submit" class="btn-primary d-block mx-auto text-center">Submit</button>
    </form>

</div>

@endsection