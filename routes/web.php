<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
// Template
// Route::<http_method>(url, callback);
// Urutan mempengaruhi routing

// Template routing
Route::get('/', function () {
    return view('welcome');
});

// Customize routing
Route::get('student_list', function() {
    echo '<h1>STUDENT LIST PAGE</h1>';
});

Route::get('student_detail/finance', function() {
    echo '<h1>FINANCE PAGE</h1>';
});

// Customize routing with variable (name)
Route::get('student_detail/{name}/', function($name) {
    echo '<h1>WELCOME '.String::upper($name).'</h1>';
});

// Customize routing with optional variable (class)
Route::get('student_detail/{name}/{class?}', [StudentController::class,'detail']);

Route::get('student_list', [StudentController::class,'index']);

Route::get('test', function() {
    return view('layout');
});

