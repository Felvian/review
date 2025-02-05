<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/url',[\App\Http\Controllers\ApiURL::class,'index']);
