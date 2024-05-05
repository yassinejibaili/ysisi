<?php

use App\Http\Controllers\employescontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home', function(){
        return view('home');
    });

    Route::resource('employes', employescontroller::class);

    Route::get('/employes/{id}/vacation', [employescontroller::class, 'vacationRequest'])->name('vacation.request');


    Route::get('/employes/{id}/certificate', [employescontroller::class, 'certificateRequest'])->name('certificate.request');

});

