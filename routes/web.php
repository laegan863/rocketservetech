<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\redirectionController;
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
Route::get('/about-us', [redirectionController::class, 'about'])->name('page.about');
Route::get('/contact-us', [redirectionController::class, 'contact'])->name('page.contact');
Route::get('/terms', [redirectionController::class, 'terms'])->name('page.terms');
Route::get('/privacy-policy', [redirectionController::class, 'privacy'])->name('page.privacy');

Route::get('/', [redirectionController::class, 'index'])->name('page.index');
Route::get('/web-development-services', [redirectionController::class, 'web_development'])->name('page.web-development');
Route::get('/digital-marketing-services', [redirectionController::class, 'digital_marketing'])->name('page.digital-marketing');

