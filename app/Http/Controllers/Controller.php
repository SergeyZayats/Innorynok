<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Alaouy\Youtube\Facades\Youtube;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //variable storing authentical data: login, password, flag of logged_in
    protected $authData = [];

    //variable storing content meta data (courses and videos id and name)
    protected $contentData = [];

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

    protected function getContentData($course_id) {	
    	$this->contentData = DB::select('SELECT course_id, video_id, video_name, video_description, sequence_number FROM course_videos WHERE course_id = ?', 
    		array($course_id));

    }	

}
