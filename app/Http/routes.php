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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('{nombre}', array('as'=>'{nombre}','uses'=>'ControllerIndex\IndexController@PintarVista'));

// Route::get('{nombre}', function($nombre){
// 	return view ('')
// });





// Si no no existe la ruta va a la vista error
Route::any('{catchall}', function() {
	return Response::view('errors.503',array(),503);
})->where('catchall', '.*');



