<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
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

// //Route to home.
// Route::get("/", function () {
//     return view("home");
// });

//Route to Products Index Page.
//Route::get("/products", [ProductsController::class, "index"]);
//Full String Method.
//Route::get("/products", "App\Http\Controllers\ProductsController@index");
Route::get("/products", [ProductsController::class, "index"])->name("products");

Route::get("/products/{name}/{id}", [ProductsController::class, "show"])->where([
    "name" => "[a-zA-Z]+",
    "id" => "[0-9]+",
]);

//Pages Route
Route::get("/", [PagesController::class, "index"]);
Route::get("/about", [PagesController::class, "about"]);
