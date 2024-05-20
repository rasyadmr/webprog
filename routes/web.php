<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;

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

Route::get('main', [FoodController::class,'index']);

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

Route::get('book_list', [BookController::class,'showList'])->name('book.list');
Route::get('book_detail/{id}', [BookController::class, 'showDetail'])->name('book.detail');

Route::get('book_form', [BookController::class, 'viewForm'])->name('book.create');
Route::post('book_store', [BookController::class, 'store'])->name('book.store');

Route::get('book_update/{book:id}', [BookController::class, 'updateForm'])->name('book.update');
Route::post('book_edit/{book:id}', [BookController::class, 'edit'])->name('book.edit');

Route::get('book_delete/{book:id}', [BookController::class, 'deleteForm'])->name('book.delete');
Route::post('book_drop/{book:id}', [BookController::class, 'drop'])->name('book.drop');