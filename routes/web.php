<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
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

Route::get('/' , [PageController::class , "home"])->name('page.home');
Route::get('/inventory' , [ItemController::class , 'index'])->name('item.list');

Route::post('/inventory' , [ItemController::class , 'store'])->name('item.store');

Route::get('/inventory/create' , [ItemController::class , 'create'])->name('item.create');


Route::get("/profile" , function() {
    return view("admin.profile");
});

Route::get
('run', [TestController::class , "run"])->name("run");
