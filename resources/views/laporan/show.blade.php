@extends('layouts.apps')
@section('content')



<div class="container mt-5">

    <div class="mb-2 ">
        <h3 class="">Hasil Laporan</h3>
    </div>
    {{--
    <div>
        <h4>Tanggal Kunjungan : {{ $laporan->tanggal_kunjungan }}</h4>
        <h4>Nomer Kredit : {{ $laporan->nomer_kredit }}</h4>
        <h4>Kondisi Nasabah : {{ $laporan->kondisi_nasabah }}</h4>
        <h4>Kondisi Barang Jaminan : {{ $laporan->kondisi_barang_jaminan }}</h4>
        <h4>Tanggal Janji Bayar : {{ $laporan->tanggal_janji_bayar }}</h4>
        <h4>Hasil Kunjungan : {{ $laporan->hasil_kunjungan }}</h4>
        <h4>Bukti Membayar :</h4>
        <img src="{{ asset('storage/' . $laporan->bukti_membayar) }}" class="w-25" alt="">
    </div> --}}

    {{-- <div>
        <iframe
            src="https://www.google.com/maps?q={{ $laporan->latitude }},{{ $laporan->longitude }}&hl=es;z=14&amp;output=embed"
            width="100%" height="100%"></iframe>
    </div> --}}

    <div class="content">

        <div class="row">
            <div class="col-lg-12 border-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <table class="table table-bordered table-striped bg-white">
                                <tbody>
                                    <tr>
                                        <td>
                                            Tanggal Kunjungan
                                        </td>
                                        <td>
                                            {{ $laporan->tanggal_kunjungan }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Nomer Kredit
                                        </td>
                                        <td>
                                            {{ $laporan->nomer_kredit}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kondisi Nasabah
                                        </td>
                                        <td>
                                            {{ $laporan->kondisi_nasabah }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kondisi Barang Jaminan
                                        </td>
                                        <td>
                                            {{ $laporan->kondisi_barang_jaminan }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tanggal Janji Bayar
                                        </td>
                                        <td>
                                            {{ $laporan->tanggal_janji_bayar }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Hasil Kunjungan
                                        </td>
                                        <td>
                                            {{ $laporan->hasil_kunjungan }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bukti Membayar
                                        </td>
                                        <td>
                                            {{ $laporan->bukti_membayar }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Foto Kunjungan
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Lihat Foto
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Foto
                                                                Kunjungan Nasabah
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="{{ asset('storage/' . $laporan->foto_kunjungan) }}"
                                                                alt="">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Understood</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Lokasi Nasabah
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop1">
                                                Lihat lokasi Nasabah
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel1">Lokasi
                                                                Nasabah
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe
                                                                src="https://www.google.com/maps?q={{ $laporan->latitude }},{{ $laporan->longitude }}&hl=es;z=14&amp;output=embed"
                                                                width="100%" height="100%"></iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Understood</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Laporan
                                        </td>
                                        <td>
                                            {!! $laporan->laporan !!}
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>



</div>



@endsection