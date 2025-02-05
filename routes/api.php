<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/{id}/url',[\App\Http\Controllers\ApiURL::class,'index']);
