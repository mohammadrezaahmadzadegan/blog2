<?php

use Illuminate\Http\Request;
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
Route::get('na','HomeController@na');
Route::get('st','HomeController@st');
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
// Route::get('/',['uses'=>'HomeController@index','as'=>'login','middleware'=>['Chekuser1']]);
Route::get('/','HomeController@index')->name('index');
Route::post('/insert','HomeController@insert')->name('insert');
Route::delete('/delete/{id?}','HomeController@delete')->name('delete');
Route::post('/update/{id?}','HomeController@update')->name('update');
Route::put('/updateSubmit/{id?}','HomeController@updateSubmit')->name('updateSubmit');
Route::get('/redirect1/{id?}','HomeController@redirect')->name('redirect');
Route::get('/about','HomeController@about')->middleware(['valmiddleware:1']);
Route::view('/welcome', 'welcome');
Route::view('/index', 'index',['list'=>[1,2,3,4]]);

Route::post('/goo','HomeController@goo');
Route::get('/ga','HomeController@ga');
Route::view('start1', 'start1',['array'=>[1,2,3,4]]);
Route::get('/startc4','startController@index')->middleware(['startMiddleware:4']);
Route::get('/startc2','startController@index2')->middleware(['startMiddleware:2']);
Route::post('/st1/{id?}','startController@index3');
Route::get('/st2','startController@index4');
Route::post('/st3/{id?}','startController@index5');
Route::post('/st4','startController@index6');


