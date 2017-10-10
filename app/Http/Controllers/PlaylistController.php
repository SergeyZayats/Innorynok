<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Alaouy\Youtube\Facades\Youtube;

class PlaylistController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Playlist Controller
    |--------------------------------------------------------------------------
    |
    | Контроллер определяет список видео, входящих в плейлист, и получает метаинформацию по ним через Youtube API,
    | получает из БД данные по соответствующей категории и передает данные в представление.
    */

	/**
     *  ID текущего плейлиста
     *
     * @var string
     */
	private $playlistID;


	/**
     *  Основная категория(тематика), к которой относится данный плейлист
     *
     * @var int
     */
	private $playlistCategoryId;	


	/**
     * Вся иерархия категория, к которой относится плейлист
     *
     * @var array
     */
	private $categoryHierarchy = [];	


	/**
     * Список видеоэлементов в плейлисте, содержащий Id видео, заголовок, описание, размер окна проигрывателя
     *
     * @var array
     */
	private $videosInfo = [];


	/**
     * Входная точка контроллера. Запрос на просмотр видео в плейлисте маршрутизируется сюда.
     * Производится вызов методо определеия категории плейлиста, опредления всей иерархии плелиста.
     * Производится получение списка видео в данном плейлисте путм вызова Youtube API, 
     * подготовка и обработка метаинформации видео в плейлисте, проверка авторизации,
     * вызов представления и передача в него необходимых данных
     * @param string category1
     * @param string category2
     * @param string category3
     * @param string category4
     * @param string category5
     * @return Illuminate\View\View
     */
	public function showPlaylistVideosEntryPoint($playlistId) 
	{
		$this->getPlaylistIdAndCategory($playlistId);

		$this->getPlaylistItems($playlistId);

    	$this->checkAuthData();

		return view('playlist_page')
					->with('dataFromYoutube', $this->videosInfo)
					->with('playlistID', $this->playlistID)
					->with('playlistCategoryId', $this->playlistCategoryId)
					->with('authData', $this->authData);
  }


    /**
     * По id плейлиста определяем последнюю(основную) в иерархии категорию(тематику) плейлиста.
     * По основной категории опредяем всю иерархию категорий, в которую входит плейлист
     * @param int $playlistId
     * @return void
     */
  	private function getPlaylistIdAndCategory($playlistId)
  	{	
  		//Сохраняем id плейлиста для передачи в представление
  		$this->playlistID = $playlistId;

  		//Извлекаем id основной категории плейлиста по его id
  		$lastCategory = DB::select 
  			('SELECT categoryId FROM playlists WHERE playlistId = ?', 
  			array($playlistId));

  		//Записываем  id категории в переменную для использования в цикле
  		$lastCategoryId = $lastCategory[0]->categoryId;

  		//Сохраняем id основной категории для передачи в представление
  		$this->playlistCategoryId = $lastCategoryId;

  		//Инициируем цикл. Нижнеуровневая категория будет записано под 0 индексом в массиве иерархии категорий	
  		$i = 0;

  		do {//Получаем id текущей категории, наименование, id родителськой категории по id текущей категории
  			$categoryHierarchy[$i] =  DB::select 
  			('SELECT categoryId, synonim, parentCategory FROM categories WHERE categoryId = ?', 
  			array($lastCategoryId));

  			// Записываем id родительской категории для следущего цикла
  			$lastCategoryId = $categoryHierarchy[$i][0]->parentCategory;

  			//Увеличиваем счетчик для следующей итерации
  			$i++;

  			//Проверяем условие. Если для последней извлеченной категории, id её родителськой категории равен NULL,
  			//то мы обработали всю иерархию. Выходим из цикла.
  		} while ($categoryHierarchy[$i-1][0]->parentCategory !== null);

  		// Переворачиваем элементы массива для того, что они были расположены в правильной последоватеьности
  		$this->categoryHierarchy = array_reverse($categoryHierarchy);		
  	}


    /**
     * По id плейлиста используя Youtube API получаем весь список видео, входящих в плейлист
     * @param int $playlistId
     * @return void
     */
	private function getPlaylistItems($playlistId) 
	{
		$playlistItems = Youtube::getPlaylistItemsSnippetAndContentDetailsByPlaylistId($playlistId);

		$this->getFullPlaylistInfo($playlistItems['results']);
  }


    /**
     * Обрабатываем каждое видео плейлиста и ивзлекаем метаинформацию: id видео, заголовок, описание.
     * Устанавливаем размеры проигрывателя в браузере
     * @param array $playlistItems
     * @return void
     */
	private function getFullPlaylistInfo($playlistItems) 
	{
		$countedPlaylistItems = count($playlistItems);

		for ($i=0; $i < $countedPlaylistItems; $i++)
		{
			$videosInfo[$i]['videoId']=$playlistItems[$i]->contentDetails->videoId;
			$videosInfo[$i]['title']=$playlistItems[$i]->snippet->title;
			$videosInfo[$i]['description']=$playlistItems[$i]->snippet->description;
		}

		$videosInfo['totalAmount'] = $countedPlaylistItems;
		$videosInfo['height'] = 480;
		$videosInfo['width'] = 820;

		$this->videosInfo = $videosInfo;
  }

} // PlaylistController end