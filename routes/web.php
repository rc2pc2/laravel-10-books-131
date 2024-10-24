<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaintingController;
use App\Http\Controllers\SuperbookController;
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

Route::get('/', [PageController::class, "home"])->name("home");
Route::get("/books", [BookController::class, "index"])->name("books.index");
Route::get("/paintings", [PaintingController::class, "index"])->name("paintings.index");
Route::get("/superbooks", [SuperbookController::class, "index"])->name("superbooks.index");
