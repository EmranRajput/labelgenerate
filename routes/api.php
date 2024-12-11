<?php
use App\Http\Controllers\USPSController;
use Illuminate\Support\Facades\Route;


Route::post('/usps/validate-address', [USPSController::class, 'validateAddress']);

