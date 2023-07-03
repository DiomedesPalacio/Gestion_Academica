<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    public function __invoke()
    {
        return view('programas');
    }
}
