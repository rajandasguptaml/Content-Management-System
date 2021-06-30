<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $req){
        if ($req->session()->has('email')){
              return view('contentindex.creator');
              
        
    } else {
            $req->session()->flash('msg', 'invalid request');
            return redirect('/login');

        }
        //return view ('index.index');
    }
   
    public function creatordashboard(){
        return view ('index.creatordash');
    }
   
    public function managerdashboard(){
        return view ('index.managerdash');
    }
   
    public function userdashboard(){
        return view ('index.userdash');
    }
    public function alladmindashboard(){
        return view ('index.alladmindash');
    }
   

   
}

