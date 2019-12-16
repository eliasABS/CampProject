<?php
Route::get('/', function() {
    return redirect('/projects');
});
 Route::get('/projects', 'ProjectController@index');
 Route::get('/projects/create', 'ProjectController@create');
 Route::post('/projects', 'ProjectController@Store');
 Route::get('/projects/{id}', 'ProjectController@show');
 Route::get("/categories/create","categoryController@create");
 Route::post("/categories","categoryController@store");
