<?php

namespace App\Http\Controllers;

use App\loguser;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(){
		return view('login.login');
	}

	public function verify(Request $req){
		$login = loguser::where('email', $req->email)
					    ->where('password', $req->password)
					    ->first();

		if(count((array)$login) > 0){
		$req->session()->put('email', $req->email);
		//$req->session()->put('password', $req->password);
		//$req->session()->put('type', $login['type']);
		return redirect ('/dashboard');
		}else{

			$req->session()->flash('msg', 'invalid email or password');
			return redirect('/login');
	}

	function index(Request $req){
		 $Request->validate([
		'email' => 'required|email',
			'password' => 'required|min:6|max:12',


		]);
		return $req ->input();
	}
}
   

}