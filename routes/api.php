<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PieChartController;

Route::get('/companies', 'pieChartController@sendData');
Route::post('/add-company', 'pieChartController@store');
Route::put('/edit/{id}', 'pieChartController@editValue');
Route::delete('/remove/{id}', 'pieChartController@remove');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
