<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MonController@accueil');

Route::get('/add-student', 'StudentsController@ajout');
Route::post('/students', 'StudentsController@traitementAjout');

Route::get('/students', 'StudentsController@afficher');