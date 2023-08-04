<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;

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

Route::get('/', [HomeController::class,'home']);
Route::get('/register', [HomeController::class,'register']);
Route::post('/register', [HomeController::class,'insert_data']);
Route::get('/show', [HomeController::class,'show_data']);

Route::get('/delete/{id}', [HomeController::class,'delete']);

Route::get('/about', [HomeController::class,'about']);
Route::get('/erp', [HomeController::class,'erp']);
Route::get('/database', [HomeController::class,'database']);
Route::get('/application', [HomeController::class,'application']);
Route::get('/it', [HomeController::class,'it']);
Route::get('/blog', [HomeController::class,'blog']);
Route::get('/quality', [HomeController::class,'quality']);
Route::get('/methodology', [HomeController::class,'methodology']);
Route::get('/project', [HomeController::class,'project']);
Route::get('/security', [HomeController::class,'security']);
Route::get('/capability', [HomeController::class,'capability']);

Route::get('/edit/{id}', [HomeController::class,'edit']);
Route::post('/update/{id}', [HomeController::class,'update']);


Route::get('/career', [CareerController::class,'career']);
Route::post('/career_submit', [CareerController::class,'career_submit']);


