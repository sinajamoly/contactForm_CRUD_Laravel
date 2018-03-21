<?php

Route::get('/','pagesController@getHome');
Route::get('/about','pagesController@getAbout');
Route::get('/contact','pagesController@getContact');

Route::post('/contact/submit','MessagesController@submit');
Route::get('/messages','MessagesController@getMessages');
