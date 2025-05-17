<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //__index method__//
    public function index($value='')
    {
        return view('contact');
    }
    //__Request for form data__//
    public function StudentStore(Request $request)
    {
        dd($request->all());
    }



}
