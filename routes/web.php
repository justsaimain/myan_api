<?php

use App\Imports\CityImport;
use App\Imports\RegionImport;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Excel::import(new RegionImport, '../public/reg.xlsx');
    Excel::import(new CityImport, '../public/MyanmarCities.xlsx');

    return 'all ok';
});
