<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//default route. Main page
Route::get('/', 'MainController@index')->name('main');

//Route for login
Route::post('/login', 'LoginController@checkUser')->name('login');

//Route for login
Route::get('/logout', 'LogoutController@checkUser')->name('logout');

//Route for Register
Route::post('/register', 'RegisterController@registerUser')->name('register');

//Route for searching
Route::post('/search', 'SearchController@showVideos')->name('search');

//Route for User Profile
Route::get('/user-profile', 'UserProfileController@index')->name('redirect_to_user_profile');

//Route for Save AJAX
Route::post('/statistics', 'StatisticsController@saveProgress');

//Route for Creating Course
Route::get('/create', 'CreateCourseController@showUploadForm');

//Route for Playlist Page
Route::get('/playlist/{playlist_id}', 'PlaylistController@showPlaylistVideosEntryPoint')->name('playlist_page');

//Route for Education plan of topic
Route::get('/программирование/php/', 'EducationPlanController@showPlanProgrammingPHP');

//Route for Education plan of topic
Route::get('/менеджмент/продукт/', 'EducationPlanController@showPlanManagementProduct');

//Route for Education plan of topic
Route::get('/программирование/javascript/', 'EducationPlanController@showPlanProgrammingJavaScript');

//Route for finding video in certain category
Route::get('/{category}/{subcategory}/{playlist}/{video}', ['uses' =>'VideoController@videoConrtollerEntryPoint']);


