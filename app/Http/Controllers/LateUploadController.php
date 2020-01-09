<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LateUploadController extends Controller
{
    protected function UploadedView(Request $request){
        //$data['heading']="FIRSTLY ASSOCIATIVE ARRAY DEFINE!";
        //   dd($data);exit();
       //    dd($request->heading);
        $data['heading']="$request->heading";
        $data['owner']="MOHAMMAD ALMAMOON!";
        $data['password']="$request->password";
        $data['file']="$request->file";
        $data['n']="$request->N";
        $data['f']="$request->F";
        $data['m']="$request->M";
        $data['s']="$request->S";
        $data['i']="$request->I";
        $data['p']="$request->P";
        $data['g']="$request->G";
        $data['stu']="$request->STU";
        $data['ORN']="$request->orn";
        $data['MF']="$request->mf";
        return view('lateupload',$data);
    }
}
