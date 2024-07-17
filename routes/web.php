<?php

use Illuminate\Http\Request;
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
Route::post('postman','HomeController@postman');
Route::get('re','HomeController@re');
Route::post('/po/{id?}','HomeController@po');
Route::view('/form', 'form');
Route::get('/soo/{is?}',
function($is){
dd(request()->cookies->get('laravel_session'));
}
);
Route::get('/foo', 'HomeController@foo');
Route::get('/',['uses'=>'HomeController@index','as'=>'login','middleware'=>['Chekuser1']]);

Route::get('/about','HomeController@about')->middleware(['valmiddleware:1']);
Route::view('/welcome', 'welcome');
Route::view('/index', 'index',['list'=>[1,2,3,4]]);

Route::post('/goo','HomeController@goo');


