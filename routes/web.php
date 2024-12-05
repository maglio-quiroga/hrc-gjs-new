<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;




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


Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/nosotros', [PageController::class, 'about'])->name('about');
Route::get('/equipo-directivo', [PageController::class, 'directivo'])->name('directivo');
Route::get('/direccion', [PageController::class, 'direccion'])->name('direccion');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');

Route::resource('dashboard/post', PostController::class);
Route::resource('dashboard/category', CategoryController::class);

/*Route::group(['prefix' => 'dashboard'], function() {
    Route::resource(
        [
            'post'=>PostController::class,
            'category'=>CategoryController::class,
        ]
        
        );
});*/

