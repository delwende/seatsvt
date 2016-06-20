<?php
use App\Course1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
//route for home page

	Route::get('/', 'TaskController@index'); 
    Route::get('/year_grad1{id}{id2}',  'TaskController@display_table');
 

//route for second year menu when use choose a submenu mathematic or physique 

Route::get('/year{annee}id{id}', 'TaskController@display_upload');

Route::post('/upload','TaskController@upload' ) ;

Route::get('/upload', 'TaskController@refresh_upload' );

Route::get('/download&filename={filename}', 'TaskController@download');
 
