<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GabrielController;

Route::resource('seu_nome', GabrielController::class);


Route::get('/', function () {
    return view('welcome');
});
