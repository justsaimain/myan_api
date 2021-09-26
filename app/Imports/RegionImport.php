<?php

namespace App\Imports;

use App\Models\Region;
use Maatwebsite\Excel\Concerns\ToModel;

class RegionImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Region([
            'name'  => $row[0] ?? "",
            'capital'  => $row[1] ?? "",
            'iso'  => $row[2] ?? "",
            'region'  => $row[3] ?? "",
            'area'  => $row[4] ?? "",
            'type'  => $row[5] ?? "",
        ]);
    }
}
