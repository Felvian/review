<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Person;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/{id}', [\App\Http\Controllers\Person::class,'index'])->name('person.index')->where('id', '[0-9]+');
Route::get('/{id}/sms', [\App\Http\Controllers\Person::class,'show'])->name('person.show')->where('id', '[0-9]+');
Route::post('/{id}/result',[App\Http\Controllers\Person::class,'create'])->name('person.create')->where('id', '[0-9]+');
Route::get('/thanks', function (){
    return view('person.thanks');
})->name('person.thanks');
