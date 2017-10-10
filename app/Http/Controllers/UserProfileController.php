<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{

  	public function index() 
  	{	
		$this->checkAuthData();

  		return view('profile')->with('authData', $this->authData);
    }


} // UserProfileController end