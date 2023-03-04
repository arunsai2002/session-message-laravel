<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\student;


class StudentController extends Controller
{
    public function index(){
       
       
        return view('index');
    }

    


    function store(Request $request){
      
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
    
       

        $data = $request->input('email');
        $request->session()->put('email',$data);
       
        
        
       
        

       
    }

    
}
