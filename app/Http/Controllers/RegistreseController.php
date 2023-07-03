<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistreseController extends Controller
{
    public function __invoke()
    {
        return view('registrese');
    }
}
