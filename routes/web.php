<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ShipmentController;

// Route::get('/register', action: [ShipmentController::class, 'register'])->name('shipments.register');
Route::post('/shipments', action: [ShipmentController::class, 'store'])->name('shipments.store');
Route::get('/dashboard-transaction', [ShipmentController::class, 'index'])->name('dashboard.transaction');
Route::get('/index', [ShipmentController::class, 'show'])->name('index.transaction');
Route::get('/shipments', [ShipmentController::class, 'index'])->name('shipments.index');

Route::get('/apps-ecommerce-generate-lr', [ShipmentController::class, 'details'])->name('shipments.apps-ecommerce-generate-lr');
// Route::get('/generate-lr-pdf', [ShipmentController::class, 'showShipments']);
// Route::get('/lr_document', [ShipmentController::class, 'documemt'])->name('lr.document');


Route::get('/generate-bill/{id}/{action}/{type}', [ShipmentController::class, 'generateBill'])->name('generate.bill');

// Route::post('/send-email/{id}/{type}', [ShipmentController::class, 'sendEmail'])->name('send.email');
Route::post('/send-email/{id}', [ShipmentController::class, 'sendEmail'])->name('send.email');


Route::get('/apps-ecommerce-lr', [ShipmentController::class, 'showShipments'])->name('shipments.apps-ecommerce-lr');
Route::get('/extraction/{id}', [ShipmentController::class, 'extractionPage'])->name('extraction.page');
Route::post('/vehicle/extract', [ShipmentController::class, 'verifyExtract'])->name('vehicle.extract');
Route::post('/invoice/extract', [ShipmentController::class, 'invoiceExtract'])->name('invoice.extract');



// Route::get('/download-pdf/{id}', [ShipmentController::class, 'downloadPdf'])->name('download.pdf');
Route::get('/apps-ecommerce-extract-overview', [ShipmentController::class, 'extractOverview'])->name('extract.overview');









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

Auth::routes(['verify' => true]);

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');


Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
