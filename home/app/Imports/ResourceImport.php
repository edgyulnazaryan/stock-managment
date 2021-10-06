<?php

namespace App\Imports;

use App\Models\Resources;
use Maatwebsite\Excel\Concerns\ToModel;

class ResourceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Resources(
            [
                'id' => $row[0],
                'name' => $row[1],
                'description' => $row[2],
                'qty_stock' => $row[3],
                'price' => $row[4],
                'category_id' => $row[5],
            ]);
    }
}
