<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Video Controller
    |--------------------------------------------------------------------------
    |
    |  
    |  
    */


	/**
     * Запрашиваемая пользователем категория/тематика плейлистов
     *
     * @var array
     */
	private $requestedCategory = [];


	/**
     * Метаинформация по видео из Youtube
     *
     * @var array
     */
	private $requestedVideo = [];

    /**
     * Метаинформация по видео из БД
     *
     * @var array
     */
    private $videoName = [];

	
	/**
     * Входная точка контроллера. Все запросы маршрутизируются в этот метод.
     * Отсюда вызываются методы парсинга категорий, запрос в БД для получений id плейлистов,
     * вызовы Youtube API, подготовка и обработка метаинформации плейлистов, проверка авторизации,
     * вызов представления и передача в него необходимых данных
     * @param string category1
     * @param string category2
     * @param string course_id
     * @param string video_id
     * @return Illuminate\View\View
     */
	public function videoConrtollerEntryPoint($category1, $category2 = null, $course_id = null, $video_id = null)
	{	
		$this->parseCategoryFromURL($categories = func_get_args());

		$this->defineRequestedVideo();

		$this->checkAuthData();

		return view('video')
                    ->with('authData', $this->authData)
                    ->with('requestedVideo', $this->requestedVideo)
                    ->with('videoName', $this->videoName);
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
	private function defineRequestedVideo() 
	{
		$requestedCourseId = $this->requestedCategory[2];
        $requestedVideoId = $this->requestedCategory[3];
        $this->videoName = DB::select('SELECT video_name FROM course_videos WHERE video_id = ? AND course_id = ?',array($requestedVideoId, $requestedCourseId));
        $this->requestedVideo = Youtube::getVideoInfo($requestedVideoId);
	}

} // VideoController end