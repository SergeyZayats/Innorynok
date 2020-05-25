<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StatisticsController extends Controller
{

  	public function saveProgress(Request $request) 
  	{
  		$data['userId'] = $request->input('userId');
  		$data['videoId'] = $request->input('videoId');

  		$data['start'] = $request->input('time_watching_start');
  		$data['end'] = $request->input('time_watching_end');
  		$data['watching_duration'] = $request->input('time_watching_duration');

  		$data['video_duration'] = $request->input('video_duration');

  		$data['start_timestamp'] = $request->input('start_timestamp');
  		$data['end_timestamp'] = $request->input('end_timestamp');

		DB::table('watched_video')->insert(
		    [
		    'user_id' => $data['userId'], 
		    'video_id' => $data['videoId'],
		    'start_time_second' => $data['start'],
			'end_time_second' => $data['end'],
			'duration_time_second' => $data['watching_duration'],
			'video_duration' => $data['video_duration'],
			'start_timestamp' => $data['start_timestamp'],
			'end_timestamp' => $data['end_timestamp'],
		    ]
		);
    }

} // UserProfileController end