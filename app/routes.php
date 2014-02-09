<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{   $ip =  $_SERVER['REMOTE_ADDR'];
	$file = 'output.txt';
   
	$buffer=$ip;
    if (file_exists($file)) {
            $buffer = file_get_contents($file) . "\n" . $ip;
    }

    $success = file_put_contents($file, $buffer);	


	return View::make('index');
});