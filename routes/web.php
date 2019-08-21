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
    return view('layouts.master');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/add', function () {
    return view('add');
});
Route::resource('/people', 'PeopleController');
// Route::get('/user{id}',function($id){
//     return view('user')->with('id',$id);//ส่งค่า id ไปที่หน้า view
// });
// Route::get('user/{id}','Usercontroller@index');
//====================================================
    // Route::prefix('/user')->group(function(){
    //     //Route::get('{id}', 'UserController@index');
    //     Route::get('{id}', function(){
    //         return "test";
    //     })->where('id', '[0-9]+');
    // });
//=====================================================