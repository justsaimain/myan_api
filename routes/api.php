<?php

use App\Http\Resources\RegionCollection;
use App\Http\Resources\RegionResource;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/regions', function () {

    $regions = Region::all();

    return response()->json([
        'status' => 200,
        'message' => 'success',
        'data' => RegionCollection::collection($regions),
    ]);
});

Route::get('/regions/{id}', function ($id) {
    $region = Region::find($id);

    return response()->json([
        'status' => 200,
        'message' => 'success',
        'data' => new RegionResource($region),
    ]);
})->name('regions.view');
