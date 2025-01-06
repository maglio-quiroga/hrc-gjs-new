<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\WebPostController;
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

Route::get('/cuentas_publicas', [PageController::class, 'cuentas_publicas'])->name('cuentas_publicas');
Route::get('/hospital_amigo', [PageController::class, 'hospital_amigo'])->name('hospital_amigo');
Route::get('/consejo_consultivo', [PageController::class, 'consejo_consultivo'])->name('consejo_consultivo');

Route::group(['prefix' => 'dashboard','middleware'=>['auth',UserAccessDashboardMiddleware::class]], function() {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

Route::group(['prefix'=>'posted'],function(){
    Route::controller(WebPostController::class)->group(function(){
        Route::get('/','index')->name('web.post.index');
        Route::get('/{post}','show')->name('web.post.show');
    });
})->name('posted');   

require __DIR__.'/auth.php';

