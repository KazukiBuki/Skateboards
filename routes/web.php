<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SkateboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/mainPage', function () {
//     return view('mainPage');
// });

// Route::get('/loginPage', function () {
//     return view('loginPage');
// });

// Route::get('/infoPage', function () {
//     return view('infoPage');
// });

// Route::get('/add_Skateboard', function () {
//     return view('add_Skateboard');
// });

// Route::get('/delete_Skateboard', function () {
//     return view('delete_Skateboard');
// });

// Route::get('/edit_Skateboard', function () {
//     return view('edit_Skateboard');
// });

Route::get('/', [SkateboardController::class, 'redirecting']);
Route::get('/mainPage',  [SkateboardController::class, 'index']);
Route::get('/add_Skateboard', [SkateboardController::class, 'create']);
Route::get('/edit_Skateboard/{skateboard}', [SkateboardController::class, 'edit']);
Route::get('/delete_skateboard/{skateboard}', [SkateboardController::class, 'destroy']);
Route::post('/store_skateboard', [SkateboardController::class, 'store']);
Route::post('/update_Skateboard/{skateboard}', [SkateboardController::class, 'update']);
