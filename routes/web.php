<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\redirectionController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\adminController;
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
Route::get('/', [redirectionController::class, 'index'])
->name('page.index');

Route::get('/web-development-services', [redirectionController::class, 'web_development'])
->name('page.web-development');

Route::get('/digital-marketing-services', [redirectionController::class, 'digital_marketing'])
->name('page.digital-marketing');

Route::get('/payment-checkout/{amount}/{description}/{transaction_id}', [paymentController::class, 'payment'])
->name('payment.checkout');
Route::get('/response', [paymentController::class, 'validation']);

Route::post('/payment-info', [paymentController::class, 'payment_info'])
->name('payment.info');

Route::post('/payment-info-store', [paymentController::class, 'info_store'])
->name('payment.info.store');

Route::get('/successful', [paymentController::class, 'successful'])
->name('page.successful');

// ADMIN
Route::get('admin/index', [adminController::class, 'dashboard'])
->name('admin.dashboard');
Route::get('admin/pending', [adminController::class, 'pending'])
->name('admin.pending');
Route::get('admin/successful', [adminController::class, 'successful'])
->name('admin.successful');
Route::get('admin/completed', [adminController::class, 'completed'])
->name('admin.completed');
Route::get('admin/clients-info/{transaction_id}', [adminController::class, 'info'])
->name('admin.page.info');
Route::post('admin/action/update/{transaction_id}', [adminController::class, 'update'])
->name('action.update');
