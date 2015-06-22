<?php

Route::resource('test', 'TestController');


Route::get('/testheaders', 'TestController@headers');