@extends('layouts.apps')
@section('content')


<h1 class="">Input Laporan tes</h1>
<a href="/penugasan"><button type="button" class="btn btn-primary btn-sm mb-3">Kembali</button></a>
<form action="/laporan" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="">
        <div class="row">
            <div class="col">
                {{-- <div class="mb-4">
                    <input type="hidden" name="id_penugasan" value="{{ $penugasan->id }}">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" id="nama_petugas" name="nama_petugas" value="{{ $nama_petugas }}" readonly>
                </div> --}}
                <div class="mb-4">
                    <label for="nik_bpoc" class="form-label">NIK BPOC</label>
                    <select id="nik_bpoc" class="form-select" aria-label="Default select example" name="nik_bpoc">
                        <option selected>Pilih NIK BPOC</option>
                        @foreach ($penugasan as $gawai)
                        <option value="{{ $gawai->name}}">{{ $gawai->user->nik }} - {{
                            $gawai->user->name }}

                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
                    <input type="text" class="form-control" id="tanggal_kunjungan" placeholder="dd-mm-yyyy"
                        name="tanggal_kunjungan">
                </div>

                <div class="mb-4">
                    <label for="kondisi_nasabah" class="form-label">Kondisi Nasabah</label>
                    <select id="kondisi_nasabah" class="form-select" aria-label="Default select example"
                        name="kondisi_nasabah">
                        <option selected>Pilih</option>
                        <option value="Koperatif">Koperatif</option>
                        <option value="Tidak Koperatif">Tidak Koperatif</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="kondisi_barang_jaminan" class="form-label">Kondisi Barang Jaminan</label>
                    <select id="kondisi_barang_jaminan" class="form-select" aria-label="Default select example"
                        name="kondisi_barang_jaminan">
                        <option selected>Pilih</option>
                        <option value="Ada,Dikuasai Nasabah">Ada,Dikuasai Nasabah</option>
                        <option value="Dipindah tangankan ke pihak ke 3">Dipindah tangankan ke pihak ke 3</option>
                        <option value="Hilang">Hilang</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tanggal_janji_bayar">Tanggal Janji Bayar:</label>
                    <input type="text" class="form-control" id="tanggal_janji_bayar" placeholder="dd-mm-yyyy"
                        name="tanggal_janji_bayar">
                </div>



            </div>
            <div class="col">
                <div class="mb-4">
                    <label for="nomer_kredit" class="form-label">Nomor Kredit</label>
                    <input id="nomer_kredit" type="text" class="form-control" placeholder="Nomor Kredit"
                        name="nomer_kredit">
                </div>

                <div class="mb-4">
                    <label for="hasil_kunjungan" class="form-label">Hasil Kunjungan</label>
                    <select id="hasil_kunjungan" class="form-select" aria-label="Default select example"
                        name="hasil_kunjungan">
                        <option selected>Pilih</option>
                        <option value="Nasabah Bayar">Nasabah Bayar</option>
                        <option value="Nasabah Janji Bayar">Nasabah Janji Bayar</option>
                        <option value="Eksekusi Barang Jaminan">Eksekusi Barang Jaminan</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="nominal_membayar" class="form-label">Nominal Membayar</label>
                    <input type="text" class="form-control" id="nominal_membayar" placeholder="Nama Nasabah"
                        name="nominal_membayar">
                </div>

                <div class=" mb-4">
                    <label for="bukti_membayar" class="form-label">Bukti Membayar</label>
                    <input type="file" class="form-control" id="bukti_membayar" name="bukti_membayar">
                </div>


                <div class=" mb-4">
                    <label for="foto_kujungan" class="form-label">Foto Kunjungan</label>
                    <input type="file" class="form-control" id="foto_kunjungan" name="foto_kunjungan">
                </div>
            </div>

            <div class="mb-4">
                <label for="laporan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil
                    Laporan</label>
                <input id="laporan" type="hidden" name="laporan" required>
                <trix-editor input="laporan"></trix-editor>

            </div>
            <div>
                <input type="hidden" id="latitude" name="latitude">
            </div>
            <div>
                <input type="hidden" id="longitude" name="longitude">
            </div>

            <div>
                <button type="submit" onclick="swal('Good job!', 'Laporan Berhasil Dibuat!', 'success')" class=" btn
                    btn-primary">Submit</button>
            </div>

            <div>

            </div>







        </div>
    </div>

</form>


{{--
<div class="mx-3">
    <h1 class="">Input Laporan tes</h1>
    <a href="/penugasan"><button type="button" class="btn btn-primary btn-sm mb-3">Kembali</button></a>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIK BPOC</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih NIK BPOC</option>
            @foreach ($pegawai as $npoc)
            <option value="1">{{ $npoc->nik_bpoc }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama BPO</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Nama BPO</option>
            @foreach ($pegawai as $npoc)
            <option value="1">{{ $npoc->nama_bpo }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="datepicker">Tanggal Kunjungan:</label>
        <input type="text" class="form-control" id="datepicker" placeholder="dd-mm-yyyy">
    </div>




    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomor Kredit</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Kredit">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kondisi Nasabah</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="1">Koperatif</option>
            <option value="2">Tidak Koperatif</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kondisi Barang Jaminan</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="1">Ada,Dikuasai Nasabah</option>
            <option value="2">Dipindah tangankan ke pihak ke 3</option>
            <option value="3">Hilang</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hasil Kunjungan</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="1">Nasabah Bayar</option>
            <option value="2">Nasabah Janji Bayar</option>
            <option value="3">Eksekusi Barang Jaminan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="datepicker">Tanggal Janji Bayar:</label>
        <input type="text" class="form-control" id="datepicker" placeholder="dd-mm-yyyy">
    </div>



    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nominal Membayar</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Nasabah">
    </div>

    <div class="input-group mb-3">
        <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB" data-max-files="3" />
    </div>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Taging Lokasi Nasabah
        </label>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Hasil Laporan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>



    <div>
        <button type="button" class="btn btn-primary">Submit</button>
    </div>
</div> --}}

@push('scripts')
<script>
    if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(function(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    document.getElementById("latitude").value = latitude;
    document.getElementById("longitude").value = longitude;
  });
}
</script>

@endpush

@push('scripts')
<script>
    $(function(){
		$('#datepicker').datepicker();
	});
</script>
@endpush

@push('scripts')
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

@endpush

<script>
    flatpickr("#tanggal_kunjungan", {
      enableTime: false,
      dateFormat: "Y-m-d H:i",
      minDate: "today",
      maxDate: new Date().fp_incr(360), // 30 days from now
      static: false,
      appendTo: document.body
    });
</script>

<script>
    flatpickr("#tanggal_janji_bayar", {
      enableTime: false,
      dateFormat: "Y-m-d H:i",
      minDate: "today",
      maxDate: new Date().fp_incr(360), // 30 days from now
      static: false,
      appendTo: document.body
    });
</script>

@push('scripts')
<script>
    FilePond.registerPlugin(
  FilePondPluginFileEncode,
	FilePondPluginFileValidateSize,
	FilePondPluginImageExifOrientation,
  FilePondPluginImagePreview
);

FilePond.create(
	document.querySelector('input')
);
</script>
@endpush


@push('scripts')
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
@endpush


@endsection