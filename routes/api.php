<?php
use App\Http\Controllers\USPSController;
use Illuminate\Support\Facades\Route;


//Route::post('/usps/validate-address', [USPSController::class, 'validateAddress']);


Route::post('/usps/create-label', [USPSController::class, 'createLabel']);
Route::delete('/usps/cancel-label/{trackingNumber}', [USPSController::class, 'cancelLabel']);
