<?php
use Illuminate\Support\Facades\Route;
echo '<br>';
echo 6;echo '<br>';
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
    return view('welcome');
});
Route::get('/foo', 'HomeController@foo');
Route::get('/','HomeController@index');
Route::get('/about','HomeController@about');
Route::view('/welcome', 'welcome');
Route::view('/index', 'index',['list'=>[1,2,3,4]]);

Route::post('/goo','HomeController@goo');


