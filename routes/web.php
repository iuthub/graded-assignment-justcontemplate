<?php

use Illuminate\Support\Facades\Route;
use App\Task;

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
Route::get('/auth','cntrl@auth')->name('/auth');
Route::get('/','cntrl@index')->name('/');
Route::post('/task','cntrl@store');
Route::bind('task',function ($value,$route){
    return Task::where('id',$value)->first();
});
Route::get('/task/delete/{task}',['as'=>'delete-task', 'uses'=>'cntrl@destroy']);


Route::get('/reg','cntrl@reg')->name('/reg');
Route::post('/register','cntrl@register')->name('register');

//route for authorization
Route::post('/login','cntrl@login')->name('login');

