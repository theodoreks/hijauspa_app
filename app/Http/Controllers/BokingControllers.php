<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BokingControllers extends Controller
{
    public function index()
    {
        return view('boking.boking');
    }

    public function selesai()
    {
        return view('boking.bokingselesai');
    }

}
