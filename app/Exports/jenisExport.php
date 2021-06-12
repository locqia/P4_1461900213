<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\support\Facades\DB;
class jenisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $jenisbuku = DB::table('jenis_buku')->get();
        return $jenisbuku;
    }
    
}
