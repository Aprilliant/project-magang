<?php

namespace App\Http\Controllers;

use App\Imports\nasbahaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\DataTables\nasabahDataTable;


class nasabahController extends Controller
{
    public function index(nasabahDataTable $dataTable)
    {
        return $dataTable->render('nasabah',  ['dataTableClass' => 'responsive w-100']);
    }

    public function import(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);

        // import data
        Excel::import(new nasbahaImport, public_path('/file_siswa/' . $nama_file));

        return redirect('/nasabah')->with('sukses', 'Data Berhasil Diimport!');
    }

    //hapus data
    public function destroy($id)
    {

        $nasabah = DB::table('nasabah')->where('id', $id)->delete();
        return redirect('/nasabah')->with('sukses', 'Data Berhasil Dihapus');
    }
}
