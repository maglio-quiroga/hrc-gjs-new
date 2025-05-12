<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\WebPostController;
use App\Http\Middleware\UserAccessDashboardMiddleware;

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

Route::get('/horarios', [PageController::class, 'horarios'])->name('horarios');
Route::get('/como_acudir_urgencias', [PageController::class, 'como_acudir_urgencias'])->name('como_acudir_urgencias');
Route::get('/donacion_de_sangre', [PageController::class, 'donacion_de_sangre'])->name('donacion_de_sangre');
Route::get('/reglamento_interno', [PageController::class, 'reglamento_interno'])->name('reglamento_interno');
Route::get('/plan_estrategico', [PageController::class, 'plan_estrategico'])->name('plan_estrategico');
Route::get('/aranceles', [PageController::class, 'aranceles'])->name('aranceles');
Route::get('/ges', [PageController::class, 'ges'])->name('ges');
Route::get('/oirs', [PageController::class, 'oirs'])->name('oirs');
Route::get('/deberes_y_derechos', [PageController::class, 'deberes_y_derechos'])->name('deberes_y_derechos');
Route::get('/ley_mila', [PageController::class, 'ley_mila'])->name('ley_mila');
Route::get('/ley_dominga', [PageController::class, 'ley_dominga'])->name('ley_dominga');
Route::get('/ley_ive', [PageController::class, 'ley_ive'])->name('ley_ive');
Route::get('/ley_rs', [PageController::class, 'ley_rs'])->name('ley_rs');

Route::get('/cuentas_publicas', [PageController::class, 'cuentas_publicas'])->name('cuentas_publicas');
Route::get('/hospital_amigo', [PageController::class, 'hospital_amigo'])->name('hospital_amigo');
Route::get('/consejo_consultivo', [PageController::class, 'consejo_consultivo'])->name('consejo_consultivo');
Route::get('/admin/chart-data', [PostController::class, 'chartData']);
Route::group(['prefix'=>'posted'],function(){
    Route::controller(WebPostController::class)->group(function(){
        Route::get('/','index')->name('web.post.index');
        Route::get('/{post}','show')->name('web.post.show');
    });
})->name('posted');

Route::middleware(['auth',UserAccessDashboardMiddleware::class])->prefix('admin')->group(
    function () {
        Route::get('/',[AdminController::class , 'dashboard'])->name('admin.resume');
        Route::get('/{model}/{action?}/{target?}',[AdminController::class , 'handleRoute'])->name('admin.handle.view');
        Route::post('{model}/create',[AdminController::class , 'create'])->name('admin.handle.create');
        Route::post('{model}/{target}/update',[AdminController::class , 'update'])->name('admin.handle.update');
        Route::post('{model}/{target}/delete',[AdminController::class , 'delete'])->name('admin.handle.delete');
    }
);

require __DIR__.'/auth.php';

