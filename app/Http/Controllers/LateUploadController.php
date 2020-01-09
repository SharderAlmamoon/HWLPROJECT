<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LateUploadController extends Controller
{
    protected function UploadedView(){
        return view('lateupload');
    }
}
