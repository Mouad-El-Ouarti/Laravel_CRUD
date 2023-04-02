<?php

use App\Http\Controllers\DataTController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [FirstController::class, "index"])->name("home.index");

Route::get('/about/{name?}', [FirstController::class, "about"])->name("home.about");

Route::get('/contact', [FirstController::class, "contact"])->name("home.contact");

Route::resource("datat", DataTController::class);

Route::resource("users", UsersController::class);
