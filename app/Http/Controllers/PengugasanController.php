<?php

namespace App\Http\Controllers;

use data;
use App\Models\data_pegawai;
use App\Models\pegawai;
use App\Models\penugasan;
use Illuminate\Http\Request;


class PengugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penugasan', [
            'pegawaian' => pegawai::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'nama_pegawai' => 'required',
            'deskripsi' => 'required',
            'nama_nasabah' => 'required',

        ]);

        penugasan::create($validateData);
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

    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = data_pegawai::where('nama', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
