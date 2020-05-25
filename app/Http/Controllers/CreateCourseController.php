<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CreateCourseController extends Controller
{

  	public function showUploadForm() 
  	{	
		$this->checkAuthData();

  		return view('create_course')->with('authData', $this->authData);
    }


} // UserProfileController end