<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('category/all', [CategoriesController::class, 'index'])->name('index_category');
Route::get('category/create', [CategoriesController::class, 'create'])->name('create_category');
Route::post('category/', [CategoriesController::class, 'store'])->name('store_category');
Route::get('category/edit/{id}', [CategoriesController::class, 'edit'])->name('edit_category');
Route::put('category/update/{id}', [CategoriesController::class, 'update'])->name('update_category');
Route::delete('category/delete/{id}', [CategoriesController::class, 'destroy'])->name('destroy_category');