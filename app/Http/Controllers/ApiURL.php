<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ApiURL extends Controller
{
    public function index($id, request $request)
    {

        $key=$request->input('key');

        if ($key!='4a8f22d183adbdd7b4adcaa7d7a935fe')
            abort(401);
        return response()->json(['url'=>URL::temporarySignedRoute('person.index',now()->addDays(7),['id'=>$id])]);
    }
}
