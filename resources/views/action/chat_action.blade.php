@php
$pesan_wa = \App\Models\pesan_wa::first();
$teks = str_replace('{nama_nasabah}', $model->nama_nasabah, $pesan_wa->isi_pesan);
$teksTanpaTag = strip_tags($teks);
@endphp

<a href="https://api.whatsapp.com/send?phone={{ $model->nomer_hp }}&text={{ urlencode($teksTanpaTag) }}"
    target="_blank"><button type="button" class="btn btn-success">Chat</button></a>