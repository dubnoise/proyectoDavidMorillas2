<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{

    public function politicacookies(){
        return view('static.politicacookies');
    }
    public function dondeestamos(){
        return view('static.dondeestamos');
    }
    public function configuracioncookies(){
        return view('static.configuracioncookies');
    }
    public function politicaprivacidad(){
        return view('static.politicaprivacidad');
    }
    public function terminosycondiciones(){
        return view('static.terminosycondiciones');
    }
}
