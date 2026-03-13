<?php

use App\Http\Controllers\questionController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [QuestionController::class, 'index']);
