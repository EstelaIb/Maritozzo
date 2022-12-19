<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{
    function welcome(){return view('welcome');}
    function about(){return view('about');}
    function menu(){return view('menu');}
    function contact(){return view('contact');}
}