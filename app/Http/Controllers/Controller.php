<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $authData = [];

    protected function checkAuthData() {

    	$loggedIn = Request::session()->get('logged_in');
    	$login = Request::session()->get('login');
    	$userId = Request::session()->get('user_id');

    	$data = array();

		if ($loggedIn===true)
		{
			$data['logged_in'] = true;
			$data['login'] = $login;
			$data['userId'] = $userId;
		}
		else {
			$data['logged_in'] = false;
			$data['login'] = null;
			$data['userId'] = null;
		}

    	$this->authData = $data;
    }
}
