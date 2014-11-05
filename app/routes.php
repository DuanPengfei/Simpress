<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*-------------------- hello --------------------*/
Route::any('hello', function() {
	return View::make('hello');
});


/*-------------------- article --------------------*/
Route::any('/',[
  'as'=>'article.index',
  'uses'=>'ArticleController@index'
]);

Route::any('/show/{id?}',[
  'as'=>'article.show',
  'uses'=>'ArticleController@show'
]);

Route::put('/create',[
  'as'=>'article.create',
  'uses'=>'ArticleController@create'
]);

Route::put('/save',[
  'as'=>'article.save',
  'uses'=>'ArticleController@save'
]);

Route::put('/edit/{id}',[
  'as'=>'article.edit',
  'uses'=>'ArticleController@edit'
]);

Route::put('/update/{id}',[
  'as'=>'article.update',
  'uses'=>'ArticleController@update'
]);

Route::delete('/delete/{id}',[
  'as'=>'article.delete',
  'uses'=>'ArticleController@delete'
]);

Route::delete('/destroy/{id}',[
  'as'=>'article.destroy',
  'uses'=>'ArticleController@destroy'
]);


/*-------------------- comment --------------------*/
Route::put('/comment/save/',[
  'as'=>'comment.save',
  'uses'=>'CommentsController@save'
]);


/*-------------------- login --------------------*/
Route::any('login',[
  'as' => 'user.login',
  'uses' => 'UserController@login'
]);

Route::any('profile',[
  'as' => 'user.profile',
  'uses' => 'UserController@profile'
]);


/*-------------------- admin --------------------*/
Route::any('admin',[
  'as' => 'admin.index',
  'uses' => 'AdminController@index'
]);


/*-------------------- error --------------------*/
