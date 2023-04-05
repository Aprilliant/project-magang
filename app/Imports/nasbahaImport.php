<?php

namespace App\Imports;

use App\Models\nasabah;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;



class nasbahaImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            nasabah::create([
                'nomor_kredit' => $row[1],
                'nama_nasabah' => $row[2],
                'cabang' => $row[3],
                'outlet' => $row[4],
                'alamat' => $row[5],
                'nomor_hp' => $row[6],
                'hari_tunggakan' => $row[7],
                'osl' => $row[8],
                'angsuran' => $row[9],
                'kewajiban' => $row[10],
            ]);
        }
    }
}
