<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogoutController extends Controller
{

  	public function checkUser(Request $request) {
		
		try {


	  		$request->session()->put('logged_in', false);

			return redirect()->route('main');

		} 
		catch (Exception $e) {
			header('HTTP/1.1 401 Unauthorized');
			echo $e->getMessage();
	  	}

    }
}