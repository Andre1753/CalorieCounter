<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\MealController;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::resource('food', FoodController::class, [
    'except' => [ 'show' ]]
);

Route::resource('meal', MealController::class, [
    'except' => [ 'show', 'create', 'store' ]]
);  
Route::post('/meal/store/{date}', [App\Http\Controllers\MealController::class, 'store'])->name('meal.store');
Route::get('/meal/calendar', [App\Http\Controllers\MealController::class, 'calendar'])->name('meal.calendar');
Route::get('/meal/createModal', [App\Http\Controllers\MealController::class, 'createModal'])->name('meal.createModal');

