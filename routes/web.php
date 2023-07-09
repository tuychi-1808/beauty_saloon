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

Route::get('/', function () {
    return view('beauty_saloon/index');
});

Route::get('/beauty_saloon/index', function () {
    return view('beauty_saloon/index');
})->name('beauty_saloon/index');

Route::get('beauty_saloon/about', [\App\Http\Controllers\AboutController::class, 'about'])->name('beauty_saloon/about');

Route::get('beauty_saloon/blog', [\App\Http\Controllers\BlogController::class, 'blog'])->name('beauty_saloon/blog');
Route::get('beauty_saloon/blog-single', [\App\Http\Controllers\BlogSingleController::class, 'single'])->name('beauty_saloon/blog-single');

Route::get('beauty_saloon/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('beauty_saloon/contact');

Route::get('beauty_saloon/master', [\App\Http\Controllers\MasterController::class, 'master'])->name('beauty_saloon/master');

Route::get('beauty_saloon/services', [\App\Http\Controllers\ServiesController::class, 'services'])->name('beauty_saloon/services');

Route::get('beauty_saloon/work', [\App\Http\Controllers\WorkController::class, 'work'])->name('beauty_saloon/work');

require __DIR__.'/auth.php';
