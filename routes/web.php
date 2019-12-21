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


Route::get('/', function () {
    return view('staff.profile');
});

//Route::group(['middleware' => 'auth'],function(){

//予約追加
Route::get('register/new', [
  'uses' => 'RegisterController@getNew',
  'as' => 'register.new'
]);
Route::post('register/new', [
  'uses' => 'RegisterController@postNew',
  'as' => 'register.new'
]);

//予約編集
Route::get('register/edit/{id}',[
  'uses' => 'RegisterController@getEditRegister',
  'as' => 'register.edit'
]);

Route::post('register/edit/{id}',[
  'uses' => 'RegisterController@postEditRegister',
  'as' => 'register.edit'
]);

//予約削除機能
Route::post('delete/{id}',[
  'uses' => 'RegisterController@postDeleteRegister',
  'as' => 'register.delete'
]);
Route::get('delete/{id}',[
  'uses' => 'RegisterController@postDeleteRegister',
  'as' => 'register.delete'
]);

//});


//認証保護


  Route::group(['prefix' => 'staff'], function(){

  //  Route::group(['middleware' => 'auth'], function(){

    //予約一覧
    Route::get('/list', [
        'uses' => 'RegisterController@getIndex',
        'as' => 'register.list'
    ]);

    //マイページプロファイル
    Route::get('/profile',[
      'uses' => 'StaffController@getProfile',
      'as' => 'staff.profile'
    ]);

    //ログアウト
    Route::get('/logout',[
      'uses' => 'StaffController@getLogout',
      'as' => 'staff.logout'
    ]);

    //登録
    Route::get('/signup', [
      'uses' => 'StaffController@getSignup',
      'as' => 'staff.signup'
    ]);
    Route::post('/signup', [
      'uses' => 'StaffController@postSignup',
      'as' => 'staff.signup'
    ]);

    Route::get('/profile',[
      'uses' => 'StaffController@getProfile',
      'as' => 'staff.profile'
    ]);

  //});

});


Route::group(['prefix' => 'staff'], function(){


    //ログイン
    Route::get('/login',[
      'uses' => 'StaffController@getLogin',
      'as' => 'staff.login'
    ]);
    Route::post('/login', [
      'uses' => 'StaffController@postLogin',
      'as' => 'staff.login'
    ]);

    //ログアウト
    Route::get('/logout',[
      'uses' => 'StaffController@getLogout',
      'as' => 'staff.logout'
    ]);

});
