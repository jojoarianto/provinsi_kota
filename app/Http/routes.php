<?php

/*
* Developed by Joko Irianto
* timdonat 2016
* 
*/

Route::get('/', 'HomeController@index');
Route::post('/getkotabyid', 'HomeController@getkotabyid');
