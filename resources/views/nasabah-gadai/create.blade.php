@extends('layouts.apps')

@section('content')


<h1 class="mb-4">Input Data Nasabah</h1>
<form action="{{ route('nasabah-gadai.store') }}" method="POST">
    @csrf
    <div class="">
        <div class="row">
            <div class="col">
                <div class="mb-4">
                    <label for="nama_nasabah" class="form-label">Nama Nasabah</label>
                    <input type="text" class="form-control" id="nama_nasabah" placeholder="Nama Nasabah"
                        name="nama_nasabah">
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat Nasabah</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat Nasabah" name="alamat">
                </div>
            </div>
            <div class="col">
                <div class="mb-4">
                    <label for="nomer_hp" class="form-label">Nomor Hp</label>
                    <input id="nomer_hp" type="text" class="form-control" placeholder="Nomor Hp" name="nomer_hp">
                </div>

                <div class="mb-4">
                    <label for="tanggal_lahir" class="form-label">tanggal Lahir</label>
                    <input id="tanggal_lahir" type="text" class="form-control" placeholder="Tanggal Lahir"
                        name="tanggal_lahir">
                </div>



            </div>

            <div>
                <button type="submit" onclick="swal('Good job!', 'Data Nasabah Berhasil Di Simpan!', 'success')"
                    class="btn btn-primary">Submit</button>
            </div>









        </div>
    </div>

</form>

@endsection