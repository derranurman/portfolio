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

Auth::routes();

Route::get('/', 'BlogController@index');
/*Route::get('/isi_post', function(){
	return view('blog.isi_post');
});*/

Route::get('/detail/{slug}', 'BlogController@detail_blog')->name('frontend.detail');
Route::get('/blog', 'BlogController@blogz')->name('frontend.blog');
Route::get('/about', 'BlogController@about')->name('frontend.about');
Route::get('/contact', 'BlogController@contact')->name('frontend.contact');
Route::get('/portfolio', 'BlogController@portfolio')->name('frontend.portfolio');
Route::get('/mycertification', 'BlogController@certification')->name('frontend.certification');




Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/category', 'CategoryController');
	Route::resource('/tag', 'TagController');

	Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
	Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
	Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
	Route::resource('/post', 'PostController');
	Route::resource('/user', 'UserController');
});
