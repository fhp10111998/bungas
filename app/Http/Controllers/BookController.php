<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BookController extends Controller{
  
    public function indexbook(){
        return view('book/indexbook');
    }

    public function hasilbook(Request $request){
       $data = $request->All();
       return view('book.hasilbook', compact('data'));
    }
    
}