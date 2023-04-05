@extends('layouts.apps')
@section('content')



{{-- search--}}



<form action="{{ route('penugasan.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="user_id">Nama Pegawai</label>
        <select id="user_id" class="form-select" name="user_id">
            <option selected>Pilih Nama Pegawai</option>
            @foreach ($user as $gawai)
            <option value="{{  $gawai->id }}">{{ $gawai->name }}

            </option>
            @endforeach
        </select>

    </div>





    <table class="table">
        <thead>

            <tr>
                <th scope="col">Pilih</th>
                <th scope="col">Nomer kredit</th>
                <th scope="col">Nama Nasabah</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col">Cabang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nasabah as $data)
            <tr>
                <td><input type="checkbox" name="nama_nasabah_id[]" value="{{ $data->id }}"></td>
                <td>{{ $data->nomor_kredit }}</td>
                <td>{{ $data->nama_nasabah }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->nomor_hp }}</td>
                <td>{{ $data->cabang }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $nasabah->links('') }}











    </div>

    </div>
    <div class="modal-footer">
        <button type="submit" onclick="swal(' Good job!', 'Penugasan Selesai Dibuat' , 'success' )"
            class="btn btn-primary">Submit</button>
    </div>
</form>


@endsection

{{-- @push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
<script>
    console.log($('#data_nasabah-table'));
    $('#data_nasabah-table').DataTable({
        responsive: true
    });
</script>
@endpush --}}