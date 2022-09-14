<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;

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
    return view('welcome');
});
// Route::resource('companies', CompanyCRUDController::class);
Route::get('/companies',[CompanyCRUDController::class,'index'])->name('companies.index');
Route::get('/companies/create',[CompanyCRUDController::class,'create'])->name('companies.create');

Route::post('/companies',[CompanyCRUDController::class,'store'])->name('companies.store');
Route::get('/companies/edit/{id}',[CompanyCRUDController::class,'edit'])->name('companies.edit');
Route::post('/companies/update/{id}',[CompanyCRUDController::class,'update'])->name('companies.update');
