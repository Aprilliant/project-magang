<?php

namespace App\Http\Controllers;

use App\DataTables\data_pegawaiDataTable;
use Illuminate\Http\Request;

class data_pegawaiController extends Controller
{
    public function index(data_pegawaiDataTable $dataTable)
    {
        return $dataTable->render('data-pegawai',  ['dataTableClass' => 'responsive w-100']);
    }
}
