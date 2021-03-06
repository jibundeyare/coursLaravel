<?php

use App\Http\Controllers\monController;

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

Route::get('/', 'monController@accueil');

Route::get('/students', 'StudentsController@afficher');
/*
Route::get('/students', function () {
    $students = App\Student::all();


    return view('students', [
        'students' => $students
    ]);
});
*/
/*
Route::post('/students', function () {
    $student = new App\Student;
    $student = App\Student::create([
        'firstname' => request('firstname'),
        'lastname' => request('lastname'),
    ]);

    return 'prénom ' . request('firstname') . ' nom ' . request('lastname') . '.';
});
*/
Route::get('/add-student', 'StudentsController@ajout');
Route::post('/students', 'StudentsController@traitementAjout');





//Route::get('/show-students', 'monController@accueil');

//Route::post('/add-student', 'monController@nouveau');