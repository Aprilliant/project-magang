<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
// use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;
use App\Imports\PegawaiImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\DataTables\data_pegawaiDataTable;

class data_pegawaiController extends Controller
{
    public function index(data_pegawaiDataTable $dataTable)
    {
        return $dataTable->render('data-pegawai',  ['dataTableClass' => 'responsive w-100']);
    }

    public function create()
    {
        return view('data-pegawai.create');
    }

    public function import()
    {
        Excel::import(new PegawaiImport, 'data_pegawai.xlsx');
    }
}
