<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AlldataController;
use App\Http\Controllers\PremissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\rolepermissioncontroller;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Message_UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

'Auth'::routes();

Route::get('/admindata', [HomeController::class, 'home']);
Route::get('/data', [HomeController::class,'data'])->name('data');
Route::get('/form', [HomeController::class,'country']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('data', [HomeController::class, 'index'])->name('data.index');

Route::resource('data',HomeController::class);
Route::resource('alldata',AlldataController::class);
Route::get('alldatacreate',[AlldataController::class,'create']);

Route::post('alldatacreate', [AlldataController::class,'statedata']);

Route::resource('permissions',PremissionController::class);
Route::resource('roles',RoleController::class);
Route::resource('rolepermission',rolepermissioncontroller::class);
Route::resource('rolepermission',rolepermissioncontroller::class);
Route::resource('chat',ChatController::class);

Route::group(['middleware' => 'auth'],function(){

    Route::get('/check/{recieverId}',[Message_UsersController::class,'check']);
    Route::post('/sendMessage', [ChatController::class,'store'])->name('sendMessage');
    Route::get('/loadMessage/{reciever}/{sender}', [ChatController::class,'load']);
    Route::get('/new/{reciever}/{sender}/{last}',[ChatController::class,'data']);

});
