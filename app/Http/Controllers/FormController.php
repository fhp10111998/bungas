<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController  extends Controller{
  
    public function hasil(Request $request){
       $data = $request->All();
       return view('hasil', compact('data'));
    }
}