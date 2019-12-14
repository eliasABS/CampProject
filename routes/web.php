<?php

Route::get("/categories/create","categoryController@create");
Route::post("/categories","categoryController@store");