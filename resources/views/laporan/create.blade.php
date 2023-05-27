@extends('layouts.apps')
@section('content')


<h1 class="">Input Laporan Kunjun</h1>
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

                <input type="hidden" name="penugasan_id" value="{{ $penugasan->id }}">
                <div class="mb-4">

                    <label for="nik_bpoc" class="form-label">NIK BPOC</label>
                    <input type="text" class="form-control" id="nik_bpoc" value="{{ $penugasan->User->nik }}">

                    {{-- <select id="nik_bpoc" class="form-select" aria-label="Default select example" name="nik_bpoc">
                        <option selected>Pilih NIK BPOC</option>
                        @foreach ($penugasan as $gawai)
                        <option value="{{ $gawai->name}}">{{ $gawai->user->nik }} - {{
                            $gawai->user->name }}

                        </option>
                        @endforeach
                    </select> --}}

                </div>
                <div class="mb-4">
                    <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
                    <input type="text" class="form-control" id="tanggal_kunjungan" placeholder="dd-mm-yyyy"
                        name="tanggal_kunjungan" required>
                </div>

                <div class="mb-4">
                    <label for="kondisi_nasabah" class="form-label">Kondisi Nasabah</label>
                    <select id="kondisi_nasabah" class="form-select" aria-label="Default select example"
                        name="kondisi_nasabah" required>
                        <option selected>Pilih</option>
                        <option value="Koperatif">Koperatif</option>
                        <option value="Tidak Koperatif">Tidak Koperatif</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="kondisi_barang_jaminan" class="form-label">Kondisi Barang Jaminan</label>
                    <select id="kondisi_barang_jaminan" class="form-select" aria-label="Default select example"
                        name="kondisi_barang_jaminan" required>
                        <option selected>Pilih</option>
                        <option value="Ada,Dikuasai Nasabah">Ada,Dikuasai Nasabah</option>
                        <option value="Dipindah tangankan ke pihak ke 3">Dipindah tangankan ke pihak ke 3</option>
                        <option value="Hilang">Hilang</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tanggal_janji_bayar">Tanggal Janji Bayar:</label>
                    <input type="text" class="form-control" id="tanggal_janji_bayar" placeholder="dd-mm-yyyy"
                        name="tanggal_janji_bayar" required>
                </div>



            </div>
            <div class="col">
                <div class="mb-4">
                    <label for="nomer_kredit" class="form-label">Nomor Kredit</label>
                    <input id="nomer_kredit" type="text" class="form-control" placeholder="Nomor Kredit"
                        name="nomer_kredit" value="{{ $penugasan->nasabah->nomor_kredit }}">
                </div>

                <div class="mb-4">
                    <label for="hasil_kunjungan" class="form-label">Hasil Kunjungan</label>
                    <select id="hasil_kunjungan" class="form-select" aria-label="Default select example"
                        name="hasil_kunjungan" required>
                        <option selected>Pilih</option>
                        <option value="Nasabah Bayar">Nasabah Bayar</option>
                        <option value="Nasabah Janji Bayar">Nasabah Janji Bayar</option>
                        <option value="Eksekusi Barang Jaminan">Eksekusi Barang Jaminan</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="nominal_membayar" class="form-label">Nominal Membayar</label>
                    <input type="text" class="form-control" id="nominal_membayar" placeholder="Nama Nasabah"
                        name="nominal_membayar" required>
                </div>

                <div class=" mb-4">
                    <label for="bukti_membayar" class="form-label">Bukti Membayar</label>
                    <input type="file" class="form-control" id="bukti_membayar" name="bukti_membayar">
                </div>


                <div class=" mb-4">
                    <label for="foto_kujungan" class="form-label">Foto Kunjungan</label>
                    <input type="file" class="form-control" id="foto_kunjungan" name="foto_kunjungan" required>
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
                <button type="submit" class=" btn
                    btn-primary">Submit</button>
            </div>

            <div>

            </div>







        </div>
    </div>

</form>



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