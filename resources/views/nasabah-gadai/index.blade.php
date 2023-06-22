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

@endpush