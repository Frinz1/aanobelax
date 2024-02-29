<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

route::get('/',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('redirect',[HomeController::class,'redirect']);

route::get('/bookmark',[HomeController::class,'bookmark']);
route::get('/aboutus',[HomeController::class,'aboutus']);
route::get('/contact',[HomeController::class,'contact']);


route::get('/popular_wrote/{id}',[HomeController::class,'popular_wrote']);
route::get('/featured_details/{id}',[HomeController::class,'featured_details']);



route::get('/remove_bookmark/{id}',[HomeController::class,'remove_bookmark']);

route::get('/read_bookmark/{id}',[HomeController::class,'read_bookmark']);


route::get('/product_details/{id}',[HomeController::class,'product_details']);


route::post('/add_bookmark/{id}',[HomeController::class,'add_bookmark']);

route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);

route::get('/view_featured',[AdminController::class,'view_featured']);

route::post('/add_featured',[AdminController::class,'add_featured']);

route::get('/show_featured',[AdminController::class,'show_featured']);



route::get('/update_featured/{id}',[AdminController::class,'update_featured']);

route::post('/update_featured_confirm/{id}',[AdminController::class,'update_featured_confirm']);

route::get('/delete_featured/{id}',[AdminController::class,'delete_featured']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

route::get('/view_product',[AdminController::class,'view_product']);

route::post('/add_product',[AdminController::class,'add_product']);

route::get('/show_product',[AdminController::class,'show_product']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/update_product/{id}',[AdminController::class,'update_product']);
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';