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
use App\Post;
Route::get('/', function () {
	$posts = Post::all();
    return view('welcome')->with('posts',$posts);
});
Route::get('logout', 'HomeController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('add_account', 'AccountController@index')->name('home');
Route::get('get_user', 'User@getUser')->name('home');
Route::get('get_accounts', 'AccountController@getAccount')->name('home');
Route::get('get_data', 'DataController@getData')->name('data');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('questions', 'HomeController@questions');
Route::get('question', 'HomeController@getAnswers');

Route::post('add_question', 'HomeController@addQuestion');
Route::get('add_answer/{id}', 'HomeController@addAnswer');

Route::get('save_answer/{id}/{a_id}', 'HomeController@saveAnswer');
Route::get('save_answers', 'HomeController@saveAnswerApi');
Route::get('get_marks', 'HomeController@getMarks');
Route::post('upload', 'HomeController@upload');

