<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Models\Penugasan;
use App\Models\pegawai;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'laporan.index',
            [
                'laporan' => laporan::all(),
            ]

        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $penugasan = penugasan::findOrFail('id');
        // return view('laporan.create', ['nama_petugas' => $penugasan->nama_bpo]);
        return view('laporan.create', [
            'pegawai' => pegawai::all(),
            'penugasan' => penugasan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nomer_kredit' => 'required',
            'tanggal_kunjungan' => 'required',
            'kondisi_nasabah' => 'required',
            'kondisi_barang_jaminan' => 'required',
            'tanggal_janji_bayar' => 'required', //
            'hasil_kunjungan' => 'required',
            'nominal_membayar' => 'required', //
            'foto_kunjungan' => 'image|file|max:5000',
            'bukti_membayar' => 'image|file|max:5000',
            'laporan' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        // Simpan gambar pertama
        if ($request->hasFile('foto_kunjungan')) {
            $image = $request->file('foto_kunjungan');
            $imagePath = $image->store('post-images');
            $validateData['foto_kunjungan'] = $imagePath;
        }

        // Simpan gambar kedua
        if ($request->hasFile('bukti_membayar')) {
            $image = $request->file('bukti_membayar');
            $imagePath = $image->store('post-images');
            $validateData['bukti_membayar'] = $imagePath;
        }

        // $validateData['user_id'] = auth()->user()->id[90];

        laporan::create($validateData);
        return redirect('laporan')->with('success', 'Laporan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        return view('laporan.show', [
            'laporan' => $laporan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
