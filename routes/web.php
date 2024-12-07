<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Middleware\UserAccessDashboardMiddleware;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/nosotros', [PageController::class, 'about'])->name('about');
Route::get('/equipo-directivo', [PageController::class, 'directivo'])->name('directivo');
Route::get('/direccion', [PageController::class, 'direccion'])->name('direccion');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');


Route::group(['prefix' => 'dashboard','middleware'=>['auth',UserAccessDashboardMiddleware::class]], function() {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

require __DIR__.'/auth.php';

