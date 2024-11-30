<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('webpage');
    }
    public function about(){
        return view('web.about');
    }
    public function direccion(){
        return view('web.direccion');
    }

    public function directivo(){
        return view('web.directivo');
    }

    public function servicios(){
        return view('web.servicios');
    }
}
