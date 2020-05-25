<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

  	public function registerUser() {

		try {

			$login = filter_input(INPUT_POST, 'login');
			if (!$login) {
				throw new Exception('Invalid login');
			}

			$password = filter_input(INPUT_POST, 'password');
			if (!$password || mb_strlen($password) < 8) {
				throw new Exception('Password must contain 8+ characters');
			}

			$passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
			if ($passwordHash === false) {
				throw new Exception('Password hash failed');
			}

			$user = DB::insert(('INSERT INTO users (login, password_hash) VALUES (?, ?)'), array($login, $passwordHash));


			return redirect()->route('main');
		} 

		catch (Exception $e) {

		header('HTTP/1.1 400 Bad request');
		echo $e->getMessage();

		}
	}
}