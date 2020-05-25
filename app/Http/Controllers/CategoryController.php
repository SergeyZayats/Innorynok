<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Alaouy\Youtube\Facades\Youtube;

class CategoryController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Category Controller
    |--------------------------------------------------------------------------
    |
    | Контроллер определяет категорию(тематику) запрашиваемых пользователем данных,
    | получает из БД данные по соответствующей категории и передает данные в представление.
    */


	/**
     * Запрашиваемая пользователем категория/тематика плейлистов
     *
     * @var array
     */
	private $requestedCategory = [];


	/**
     * Список плейлистов, которые соответствуют запрашиваемой категории
     *
     * @var array
     */
	private $relevantPlaylists = [];


	 /**
     * Все данные получаемые через запрос Youtube API
     *
     * @var array
     */
	private $dataFromYoutube = [];


	/**
     * Метаинформация по плейлистам, передаваемая в представление
     *
     * @var array
     */
	private $playlistDataForView = [];

	
	/**
     * Входная точка контроллера. Все запросы маршрутизируются в этот метод.
     * Отсюда вызываются методы парсинга категорий, запрос в БД для получений id плейлистов,
     * вызовы Youtube API, подготовка и обработка метаинформации плейлистов, проверка авторизации,
     * вызов представления и передача в него необходимых данных
     * @param string category1
     * @param string category2
     * @param string category3
     * @param string category4
     * @param string category5
     * @return Illuminate\View\View
     */
	public function categoryConrtollerEntryPoint($category1, $category2 = null, $category3 = null, $category4 = null, $category5 = null)
	{	
		$this->parseCategoryFromURL($categories = func_get_args());

		$this->getPlaylistByCategory();

		$this->getFullPlaylistInfoByAPI();

		$this->processingPlaylistInfo();

		$this->checkAuthData();

		return view('category')
                    ->with('dataFromYoutube', $this->playlistDataForView)
                    ->with('authData', $this->authData)
                    ->with('requestedCategory', $this->requestedCategory);
	}


    /**
     * Распарсивает URL запроса.
     * Распарсивание производится непосредственно в момент присвоения значения аргументу метода.
     * Сохраняем значения в массив.
     * Category1 получит индекс 0 в массиве, Category2 - индекс 1 и т.д.
     * @param  array $categories
     * @return void
     */
	private function parseCategoryFromURL($categories) 
	{
		$this->requestedCategory = $categories;
	}


    /**
     * Вытягиваем из Базы данных id плейлистов по соответствующим категориям.
     * @return Illuminate\Support\Facades\DB
     */
	private function getPlaylistByCategory() 
	{
		$this->relevantPlaylists = DB::select (
            'SELECT playlistId FROM playlists WHERE categoryId = 
            (SELECT categoryId FROM categories WHERE categoryName = ? AND parentCategory = 
            (SELECT categoryId FROM categories WHERE categoryName = ?))',
            array($this->requestedCategory[2], $this->requestedCategory[1]));
	}


    /**
     * Разбиваем весь список id плейлистов на отдельные элементы.
     * По каждому запрашиваем информацию через Youtube API.
     * Всю полученную информацию сохраняем в массив.
     * @return void
     */
	private function getFullPlaylistInfoByAPI()
	{
		foreach ($this->relevantPlaylists as $palylist) 
		{
		$playlistId = $palylist->playlistId;
		
		$params = array(
		'q'             => $playlistId,
		'type'          => 'playlist',
		'part'          => 'id, snippet',
		'maxResults'    => 1
		);

		$this->dataFromYoutube[]  = Youtube::searchAdvanced($params, true);
		}
	}


    /**
     * Вся информация о плейистах разбивается на отдельные элементы(плейлисты).
     * По каждому элементу сохраняется информация, впоследствии использующаяся в представлении: id, наименование и описание плейлиста
     * @return void
     */
	private function processingPlaylistInfo()
	{
		for ($i=0; $i < count($this->dataFromYoutube); $i++) 
		{ 
			foreach ($this->dataFromYoutube[$i]['results'] as $key => $value) 
			{
				$this->playlistDataForView[$i]['playlistId'] = $value->id->playlistId;
				$this->playlistDataForView[$i]['title'] = $value->snippet->title;
				$this->playlistDataForView[$i]['description'] = $value->snippet->description;
			}
		}

        $this->playlistDataForView['height'] = 240;
        $this->playlistDataForView['width'] = 360;
	}


} // CategoryController end