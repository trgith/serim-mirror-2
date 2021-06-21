<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContraloriaController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('contraloria');
    }


    public function getViewContraloria()
    {
        return view('dashboard.contraloria.contraloria');
    }

}
