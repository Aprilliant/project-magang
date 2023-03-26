@extends('layouts.apps')
@section('content')


<div class="mx-3">
    <h1 class="">Input Laporan tes</h1>
    <a href="/penugasan"><button type="button" class="btn btn-primary btn-sm mb-3">Kembali</button></a>

    <div class="mb-3">
        <label for="datepicker">Tanggal Kunjungan:</label>
        <input type="text" class="form-control" id="datepicker" placeholder="dd-mm-yyyy">
    </div>

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
        <input type="file" class="form-control" id="inputGroupFile02">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
</div>

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
    flatpickr("#datepicker", {
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


@endsection