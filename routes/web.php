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

Route::get('/', function () {
    return view('welcome');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('/home', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/gallery', fn () => view('gallery'));
Route::get('users', function () {
    $users = [];
    return view('users.index', [
    'users' => $users,
    ]);
   });

//    Route::get('/student', [StudentController::class, 'index']);

// Crud student
// Route::resource('/student', StudentController::class);
Route::get('/student', [StudentController::class, 'index']);
