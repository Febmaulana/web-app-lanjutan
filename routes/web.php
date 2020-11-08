<?php

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

// 5 URL Closure
// Route::get("/merah", function () {
//     return "<h1 style='color:red;'> Closure</h1>";
// });
// Route::get("/biru", function () {
//     return "<h1 style='color:blue;'> Closure</h1>";
// });
// Route::get("/hijau", function () {
//     return "<h1 style='color:green;'> Closure</h1>";
// });
// Route::get("/tomat", function () {
//     return "<h1 style='color:tomato;'> Closure</h1>";
// });
// Route::get("/hitam-muda", function () {
//     return "<h1 style='color:grey;'> Closure</h1>";
// });

//2 Controller
use App\Http\Controllers\PertamaController;
use App\Http\Controllers\KeduaController;

Route::get("/v1c1", [PertamaController::class, "first"]);
Route::get("/v2c1", [PertamaController::class, "second"]);
Route::get("/v3c1", [PertamaController::class, "third"]);
Route::get("/v1c2", [KeduaController::class, "satu"]);
Route::get("/v2c2", [KeduaController::class, "dua"]);
Route::get("/v3c2", [KeduaController::class, "tiga"]);

Route::get("/tema/boostrap", [PertamaController::class, "index"]);

Route::get("/gambar", function () {
          return '<img src="https://img.icons8.com/cute-clipart/64/000000/rocket.png" width="50%">';
});
// Route::get("/", function () {
//     return view("welcome");
// });
