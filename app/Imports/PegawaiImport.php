<?php

namespace App\Imports;

use App\Models\pegawai;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;



class pegawaiImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            pegawai::create([
                'nama' => $row[1],
                'nomor_identitas' => $row[2],
                'alamat' => $row[3],
                'nomor_telepon' => $row[4],
            ]);
        }
    }
}
