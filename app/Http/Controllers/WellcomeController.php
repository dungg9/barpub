<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function __contruct()
    {
        $this->middleware('guest');
    }

    public function index();
    {
        return view('wellcome');
    }
}
