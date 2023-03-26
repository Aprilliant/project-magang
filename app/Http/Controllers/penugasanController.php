<?php

namespace App\Http\Controllers;

use App\DataTables\data_nasabahDataTable;
use App\Models\User;
use App\Models\pegawai;
use App\Models\Penugasan;
use App\Models\data_nasabah;
use Illuminate\Http\Request;

class penugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pegawai = pegawai::all();
        $user = User::all();
        $nasabah = data_nasabah::all();
        $penugasan = penugasan::where('user_id', auth()->user()->id)->get();
        return view('penugasan', compact('user', 'nasabah', 'penugasan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(data_nasabahDataTable $dataTable)
    {
        return $dataTable->render('penugasan.create',  [
            'dataTableClass' => 'responsive w-100',
            'pegawai' => pegawai::all(),
            'nasabah' => data_nasabah::all(),
        ]);
        // return view('penugasan.create', [
        //     'pegawai' => pegawai::all(),
        //     'nasabah' => data_nasabah::all(),
        // ]);
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
            'user_id' => 'required',
            'nama_nasabah_id' => 'required',
            'deskripsi' => 'required',

        ]);

        Penugasan::create($validateData);
        return redirect('/penugasan')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
