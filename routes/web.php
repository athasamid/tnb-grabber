<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function (){
	return response()->json(App\Posts::status('publish')->paginate(10));
});

Route::get('/post/{id}', function ($id){
	return response()->json(App\Posts::status('publish')->find($id));
});
