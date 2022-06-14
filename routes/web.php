<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/add_post',[PostController::class,'addPost'])->name('post.add');

Route::post('/add_post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/show_student',[PostController::class,'getAllStudentList'])->name('post.showdata');

Route::get('/show_student/{id}',[PostController::class,'getStudentById'])->name('post.getbyid');

Route::get('/delet_student/{id}',[PostController::class,'deleteStudentById'])->name('post.getbyid');

Route::post('/update_student',[PostController::class,'updateStudentById'])->name('post.update');
