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
    public function equipment(){
        return view('web.equipment');
    }
}
