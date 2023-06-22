<?php

namespace App\Http\Controllers;

use App\Models\data_nasabah;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\DataTables\data_nasabahDataTable;

class DataNasabahController extends Controller
{
    public function index(data_nasabahDataTable $dataTable)
    {
        return $dataTable->render('data-nasabah',  ['dataTableClass' => 'responsive w-100']);
    }

    // public function importExcel(Request $request)
    // {
    //     $file = $request->file('file');
    //     Excel::import(new NasabahImport, $file);
    //     return redirect('/nasabah')->with('success', 'Data berhasil diimport!');
    // }

    public function destroy($id)
    {
        $nasabah = data_nasabah::find($id);
        $nasabah->delete();
        return redirect('/nasabah')->with('success', 'Data Berhasil Dihapus');
    }
}
