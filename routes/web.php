<?php

use App\Http\Controllers\InertiaController;
use App\Livewire\Counter;
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
 
Route::get('/counter', Counter::class);
Route::get('/inertia', InertiaController::class);
Route::get('/', function () {
    return view('welcome');
});
