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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Guest\IndexController@show') -> name('index');

Route::get('/register', 'AuthController@showRegister') -> name('register');
Route::post('/register', 'AuthController@register');

Route::get('/login', 'AuthController@showLogin') -> name('login');
Route::post('/login', 'AuthController@login');

Route::get('/logout', 'AuthController@logout') -> name('logout');

// http://localhost:8000/admin/dashboard
// http://localhost:8000/admin/news
Route::group(['prefix' => 'admin', 'middleware' => App\Http\Middleware\AdminMiddleware::class], function() {
    // http://localhost:8000/admin/room_list
    Route::get('/room_list', 'RoomListController@show')->name('admin.room_list');

    Route::post('room_list/sel', 'RoomListController@sel')->name('admin.room_list.sel');

    Route::post('room_list/add', 'RoomListController@add')->name('admin.room_list.add');

    Route::post('room_list/mod', 'RoomListController@mod')->name('admin.room_list.mod');

    Route::post('room_list/del', 'RoomListController@del')->name('admin.room_list.del');
});
