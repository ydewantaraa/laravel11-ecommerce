<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class USerController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}
