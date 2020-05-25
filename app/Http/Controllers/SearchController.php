<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Alaouy\Youtube\Facades\Youtube;

class SearchController extends Controller
{

  private $dataFromYoutube=array();


  /**
   * Найти видео на Youtube по фразе которую ввели в поле для поиска
   *
   * @param  string  $_POST['search_phrase']
   * @return Response
   */

  public function showVideos()
  {
  	$dataFromYoutube = $this->findVideosBySearch();

  	$this->processingResult($dataFromYoutube);


    for($i=0; $i<50; $i++) {

    $title= $this->dataFromYoutube[$i]['videoInfo']->snippet->title ?? null;
    $descripton=  $this->dataFromYoutube[$i]['videoInfo']->snippet->description ?? null;
    $tags = $this->dataFromYoutube[$i]['videoInfo']->snippet->tags ?? null;

    }

    $this->checkAuthData();

  	return view('search')->with('dataFromYoutube', $this->dataFromYoutube)->with('authData', $this->authData);
  }

  private function findVideosBySearch()
  {
    $params = array(
    'q'             => $_POST['search_phrase'],
    'type'          => 'video',
    'part'          => 'id, snippet',
    'maxResults'    => 50
	);

	$dataFromYoutube  = Youtube::searchAdvanced($params, true);

	return $dataFromYoutube;
}


  private function processingResult($dataFromYoutube)   
  {
  	$i=0;
  	foreach ($dataFromYoutube['results'] as $key => $value) {

  		$this->dataFromYoutube[$i]['videoId'] = $value->id->videoId;
      $this->dataFromYoutube[$i]['videoInfo'] = $this->getVideoInfoFromYoutube($this->dataFromYoutube[$i]['videoId']);

      $i++;
  	}
  	
    $this->dataFromYoutube['height'] = 240;
    $this->dataFromYoutube['width'] = 360;

  }

  private function getVideoInfoFromYoutube($videoId)   
  {
    $videoInfo = Youtube::getVideoSnippet($videoId);
    return $videoInfo;
  }


}