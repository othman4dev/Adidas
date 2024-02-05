<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesControllers;
use App\Http\Controllers\TagesControllers;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/Products', [ProductController::class, 'index']);
Route::get('/Categories', [CategoriesControllers::class, 'index']);
Route::post('/addProduct', [ProductController::class, 'add']);
Route::get('/DeletProduct/{id}', [ProductController::class, 'delet']);
Route::post('/UpdateProduct/{id}', [ProductController::class, 'update']);

Route::post('/addCategory', [CategoriesControllers::class, 'add']);
Route::post('/updateCategory/{id}', [CategoriesControllers::class, 'update']);
Route::get('/DeletCategory/{id}', [CategoriesControllers::class, 'delet']);

Route::get('/Tags', [TagesControllers::class, 'index']);
Route::post('/addTags', [TagesControllers::class, 'add']);
Route::post('/updateTags/{id}', [TagesControllers::class, 'update']);
Route::get('/DeletTage/{id}', [TagesControllers::class, 'delet']);

