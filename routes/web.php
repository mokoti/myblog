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

/*
 ■ ルーティングは書き方を統一させましょう
 1 独立したURL
 Route::get('home', 'HomeController@index')->name('home');

 2 複数のアクションメソッドがある場合
 Route::get('contact', 'ContactController@showForm')->name('contact.showForm');
 Route::post('contact', 'ContactController@send')->name('contact.send');

 3 サブディレクトリのルーティング
 Route::group(['prefix' => 'users/{id}', 'namespace' => 'Users', 'as' => 'users.'], function () {
    Route::resource('comments', 'CommentController');
　});

 */

// ???
//Auth::routes();

// ルート　名前をつける
Route::get('home', 'BlogController@index')->name('home');

// 記事(post)関連
Route::resource('posts', 'PostController');
// Route::get('post/new', function(){return view('post.new');}); 	// 新規投稿
// Route::get('post/{id}', 'PostController@showPost'); 			// 記事本文
// Route::get('post/edit/{id}', 'PostController@editPost');		// 記事編集
// Route::get('post/delete/{id}', 'PostController@deletePost');	// 記事削除
// Route::post('post/confirm', ['as' => 'post.confirm','uses' => 'PostController@confirmPost']);

Route::resource('users', 'UserController');

