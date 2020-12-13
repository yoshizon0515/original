<?php

use Illuminate\Support\Facades\Route;

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

// アクセス時
Route::get('/', 'PostsController@index');


//  タスク一覧(メニューバーからの遷移時)
Route::get('/task-list', function(){
    return view('posts.task-list');
});


//  タスク登録(メニューバーからの遷移時)
Route::get('/task-insert', function(){
    return view('posts.task-insert');
});

// タスク更新(メニューバーからの遷移時)
Route::get('/task-update', function(){
    return view('posts.task-update');
});

