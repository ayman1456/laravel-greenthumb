<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function contactus(){
     
        return view('contactus');
    }
    function aboutus(){
     
        return view('aboutus');
    }
}
