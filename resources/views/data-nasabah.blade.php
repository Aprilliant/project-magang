@extends('layouts.apps')

@section('content')

<div class="container mt-5 ml-5 ">
    <div class="row">
        <div class="col">
            {{ $dataTable->table(['class' => $dataTableClass]) }}


        </div>

    </div>

</div>


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