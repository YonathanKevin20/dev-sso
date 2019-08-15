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
    return view('welcome');
});

// Route::get('/cas/login', function() {
//     return cas()->authenticate();
// })->name('cas.login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/cas/logout', [
    function() { 
        return cas()->logout(); 
    }
])->name('cas.logout');
