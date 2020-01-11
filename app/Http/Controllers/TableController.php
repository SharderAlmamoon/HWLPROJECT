<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function viewtable(){
        $date=DB::table('news')->get();
       // dd($date);
        $data['posts']=$date;
        return view('post.index',$data);
    }
    public function create(){
        return view('post.create');
    }
  public function store(Request $request){
        //dd($request->all());
        $data['body']=$request->body;
        $data['details']=$request->address;
        $data["address"]=$request->address;
        DB::table('news')->insert($data);
        return redirect()->to('tableview');

  }
}
