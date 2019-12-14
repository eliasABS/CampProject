<?php

 Route::get('/projects', 'ProjectController@index');
 Route::get('/projects/create', 'ProjectController@projectForm');
 Route::post('/projects', 'ProjectController@projectStore');
 Route::get('/projects/{id}', 'ProjectController@show');
 
Route::get("/categories/create","categoryController@create");
Route::post("/categories","categoryController@store");
