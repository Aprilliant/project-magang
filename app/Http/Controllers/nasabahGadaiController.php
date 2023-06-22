<?php

namespace App\Http\Controllers;

use App\DataTables\nasabah_gadaiDataTable;
use App\Models\nasabah;
use Illuminate\Http\Request;
use App\Models\nasabah_gadai;

class nasabahGadaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(nasabah_gadaiDataTable $dataTable)
    {
        return $dataTable->render('nasabah-gadai.index',  ['dataTableClass' => 'responsive w-100']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nasabah-gadai.create');
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
            'nama_nasabah' => 'required',
            'alamat' => 'required',
            'nomer_hp' => 'required',
            'tanggal_lahir' => 'required',

        ]);

        nasabah_gadai::create($validateData);
        return redirect('/nasabah-gadai')->with('success', 'Data Berhasil Ditambahkan');
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
