<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyInformationController extends Controller
{
    protected function InformationView(){
        return view('information');
    }
}
