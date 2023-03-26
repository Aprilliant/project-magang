@extends('layouts.apps')
@section('content')


<form action="penugasan" method="post">
    @csrf
    <div class="form-group">
        <label for="user_id">Nama Pegawai</label>
        <select id="user_id" class="form-select" name="user_id">
            <option selected>Pilih Nama Pegawai</option>
            @foreach ($pegawai as $gawai)
            <option value="{{  $gawai->id }}">{{ $gawai->nama_bpo }}

            </option>
            @endforeach
        </select>

    </div>
    <div class="form-group">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col">
                    {{ $dataTable->table(['class' => $dataTableClass]) }}


                </div>

            </div>

        </div>
    </div>










    </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" onclick="swal(' Good job!', 'Penugasan Selesai Dibuat' , 'success' )"
            class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
<script>
    console.log($('#data_nasabah-table'));
    $('#data_nasabah-table').DataTable({
        responsive: true
    });
</script>
@endpush