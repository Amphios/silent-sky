<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    $people = ['Vaughan', 'Slater'];

    return view('welcome')->with('people', $people);
});*/

Route::get('about', function() {
    return view('pages.about');
});

Route::get('/', 'PagesController@home');

Route::get('/cards', 'CardsController@index');
Route::get('/cards/{card}', 'CardsController@show');