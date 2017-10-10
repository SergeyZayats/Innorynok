<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class LoginController extends Controller
{

  	public function checkUser(Request $request) {
		
		try {

	  		$login = filter_input(INPUT_POST, 'login');
	  		$password = filter_input(INPUT_POST, 'password');

	  		$user = DB::select(('SELECT * FROM users WHERE login = ?'), array($login));

	  		if(empty($user)) {
				throw new Exception('There are not such login and password');
			}

	  		if (password_verify($password, $user[0]->password_hash) === false) {
				throw new Exception('Invalid password');
			}

	  		$request->session()->put('logged_in', true);
	  		$request->session()->put('login', $login);
	  		$request->session()->put('user_id', $user[0]->user_id);

			return redirect()->route('main');

		} 
		catch (Exception $e) {
			header('HTTP/1.1 401 Unauthorized');
			echo $e->getMessage();
	  	}

    }
}