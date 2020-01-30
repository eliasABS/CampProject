<?php
Route::get('/', function() {
    return redirect('/index');
});

 Route::get('/projects', 'ProjectController@index');
 Route::get('/projects/create', 'ProjectController@create');
 Route::post('/projects', 'ProjectController@Store');
 Route::get('/projects/{id}', 'ProjectController@show');
 
 Route::get("/categories/create","categoryController@create");
 Route::post("/categories","categoryController@store");
 
 Route::get("/cities/create","cityController@create");
 Route::post("/cities","cityController@store");
 
 Auth::routes();
 //Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function() {
   // Auth::routes(['register' => false]);
   // Route::get('/home', 'HomeController@index')->name('home');
 //});
 Route::get('/home', 'HomeController@index')->name('home');

 Route::get('/profile/{id}','ProfileController@show');
 Route::get('/index','IndexController@index');
 