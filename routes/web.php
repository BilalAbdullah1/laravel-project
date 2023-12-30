<?php

use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\registrationcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about/{id}/{name}', function(int $id ){
//     return view("about") -> with(['id' => $id]);
// });

Route::get('/',[aboutcontroller::class,'index']);

Route::get('/about',[aboutcontroller::class,'about']);

Route::get('/registeration',[registrationcontroller::class,'registration']);

Route::post('/registeration',[registrationcontroller::class,'create']);

Route::get('/studentview',[registrationcontroller::class,'studentview']);

Route::get('/studentdelete/{id}',[registrationcontroller::class,'Delete'])->name('studentdelete');

Route::get('/studentedit/{id}',[registrationcontroller::class,'Edit'])->name('studentedit');

