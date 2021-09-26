<?php

namespace App\Imports;

use App\Models\City;
use Maatwebsite\Excel\Concerns\ToModel;

class CityImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new City([
            'name'  => $row[2] ?? "",
            'latitude'  => $row[0] ?? "",
            'longitude'  => $row[1] ?? "",
            'region_id'  => $row[3] ?? "",
        ]);
    }
}
