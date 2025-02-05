<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Person;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/{id}', [\App\Http\Controllers\Person::class,'index'])->name('person.index');
Route::get('/{id}/sms', [\App\Http\Controllers\Person::class,'show'])->name('person.show');
Route::post('/{id}/result',[App\Http\Controllers\Person::class,'create'])->name('person.create');
Route::post('/end',[App\Http\Controllers\Person::class,'end'])->name('person.end');
