<?php

namespace App\Exports;

use App\Models\Resources;
use Maatwebsite\Excel\Concerns\FromCollection;

class ResourceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Resources::all();
    }
    
}
