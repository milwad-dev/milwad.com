<?php

use App\Http\Controllers\DocsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
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

// Admin routes
Route::group(['prefix' => 'admin'], function ($router) {
    $router->get('panel', PanelController::class)->name('admin.panel');
});

// Home routes
Route::get('/', HomeController::class)->name('home.index');
Route::get('blog', HomeController::class)->name('blog.index');
Route::get('docs', DocsController::class)->name('docs.index');
Route::get('{repo}/docs/{version}/{page}', DocsController::class)->name('docs.details');
