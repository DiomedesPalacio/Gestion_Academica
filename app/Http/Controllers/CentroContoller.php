<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroContoller extends Controller
{
    public function __invoke()
    {
        return view('centros');
    }
}
