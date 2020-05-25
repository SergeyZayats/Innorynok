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

//Route for Playlist Page
Route::get('/playlist/{playlist_id}', 'PlaylistController@showPlaylistVideosEntryPoint')->name('playlist_page');

//Route for finding video in certain category
Route::get('/{category1}/{category2?}/{category3?}/{category4?}/{category5?}', ['uses' =>'CategoryController@categoryConrtollerEntryPoint']);



