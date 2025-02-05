<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ApiURL extends Controller
{
    public function index($id)
    {
        return URL::signedRoute('person.index',['id'=>$id]);
    }
}
