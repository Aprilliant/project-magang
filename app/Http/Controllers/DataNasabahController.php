<?php

namespace App\Http\Controllers;

use App\DataTables\data_nasabahDataTable;
use App\Models\data_nasabah;
use Illuminate\Http\Request;

class DataNasabahController extends Controller
{
    public function index(data_nasabahDataTable $dataTable)
    {
        return $dataTable->render('data-nasabah',  ['dataTableClass' => 'responsive w-100']);
    }
}
