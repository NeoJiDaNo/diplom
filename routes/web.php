<?php

use Illuminate\Support\Facades\Auth;
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

//Route::group(['middleware' => ['auth', 'isadmin'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
//
//});

Route::get('/admin', 'MainController@admin')->name('admin');
Route::post('/admin/upload', 'uploadController@admin_upload');

Route::get('/', 'mainController@home');

Route::get('/about', 'mainController@about');

Route::get('/comment', 'mainController@comment')->name('comment');
Route::post('/comment/check', 'mainController@comment_check');

Route::get('bk', 'uploadController@bk');
Route::get('mac', 'uploadController@mac');
Route::get('kfc', 'uploadController@kfc');
Route::get('mag', 'uploadController@mag');
Route::get('pere', 'uploadController@pere');
Route::get('pyat', 'uploadController@pyat');

Route::name('reg.')->group(function (){
    Route::view('/', 'home')->name('home');

    Route::get('/login', function (){
        if(Auth::check()){
            return redirect(route('reg.home'));
        }
        return view('login');
    })->name('login');

    Route::post('login', [\App\Http\Controllers\loginController::class, 'login']);

    Route::get('/logout', function (){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function (){
        if (Auth::check()){
            return redirect(route('reg.home'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\registerController::class, 'save']);
});
