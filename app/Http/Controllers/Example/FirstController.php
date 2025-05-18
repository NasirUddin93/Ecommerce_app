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
    public function store(Request $request)
    {
            $validated = $request->validate([
                'name' => 'required|max:55',
                'email' => 'required|max:80',
                'password' => 'required|min:6|max:12',
            ]);
        dd($request->all());
    }



}
