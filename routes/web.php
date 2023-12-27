<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Контроллеры сайта */

/* Контроллер страницы Home*/
use App\Http\Controllers\Site\HomeController;
/* Контроллер Страницы About */
use App\Http\Controllers\Site\AboutController;
/* Контроллер Страницы Contact */
use App\Http\Controllers\Site\ContactController;
/* Контроллер Страницы Blog */
use App\Http\Controllers\Site\BlogController;

/* Контроллеры Админ панели */

use App\Http\Controllers\Admin\AdminHomeController;

/*
|--------------------------------------------------------------------------
| Веб-маршруты
|--------------------------------------------------------------------------
|
| Здесь вы можете зарегистрировать веб-маршруты для своего приложения. Эти
| маршруты загружаются RouteServiceProvider, и все они будут
| быть отнесены к группе промежуточного программного обеспечения «веб». Сделай что-нибудь великое!
|
*/

/* Роут главной страницы */
Route::get('/', [HomeController::class, 'HomePage'])->name('Home');
/* Роут страницы блог */
Route::get('/blog', [BlogController::class, 'BlogPage'])->name('Blog');
/* Роут страницы о нас */
Route::get('/about', [AboutController::class, 'AboutPage'])->name('About');
/* Роут страницы Котнактов*/
Route::get('/contact', [ContactController::class, 'ContactPage'])->name('Contact');
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

Route::prefix('wp-admin')->middleware(['auth'])->group(function () {
    /* Роут главной админ страницы */
    Route::get('/', [AdminHomeController::class, 'AdminHomePage'])->name('AdminHomePage');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
