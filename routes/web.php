<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Role;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [UserController::class, 'Dashboard'])->name('web.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//user routes
Route::middleware(['auth', 'roles:user'])->group(function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('/user/dashboard', 'UserDashboard')->name('user.dashboard');

     });

        //label
    Route::controller(LabelController::class)->group(function(){
        Route::get('/create/label', 'CreateLabel')->name('create.label');
        Route::get('/my/label', 'MyLabel')->name('my.label');
        Route::get('/recharge/plan', 'RechargePlan')->name('recharge.plan');


    });

 });

//admin routes
Route::middleware(['auth', 'roles:admin'])->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');

    });


});

require __DIR__.'/auth.php';
