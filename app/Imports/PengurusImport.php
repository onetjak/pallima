<?php

namespace App\Imports;

use App\Pengurus;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PengurusImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Pengurus::create([
                'no_hp'     => $row[0],
                'nama'    => $row[1],
                'jabatan'    => $row[2],
                'kategori'    => $row[3],
                'alamat'    => $row[4],
                'masa_bhakti'    => $row[5],
                'mulai'    => $row[6],
                'berakhir'    => $row[7],
                'sk'    => $row[8],
                'tanggal'    => $row[9],
            ]);
        }
    }
}
