<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;




// Route::get('/home', function () {
//     return view('pelanggan.home');
// });


route::get('/home',[homecontroller::class,'index']);

route::get('/admin',[admincontroller::class,'index']);
route::get('/createadmin',[admincontroller::class,'create']);
route::post('/saveadmin',[admincontroller::class,'store']);
Route::get('/editadmin/{id}',[adminController::class,'edit']);
Route::put('/updateadmin/{id}',[adminController::class,'update']);
Route::get('/deleteadmin/{id}',[adminController::class,'destroy']);
Route::get('/editadmin/{id}',[adminController::class,'edit']);

route::get('/product',[productcontroller::class,'index']);
route::get('/createproduct',[productcontroller::class,'create']);
route::post('/saveproduct',[productcontroller::class,'store']);
Route::get('/editproduct/{id}',[productController::class,'edit']);
Route::put('/updateproduct/{id}',[productController::class,'update']);
Route::get('/deleteproduct/{id}',[productController::class,'destroy']);
Route::get('/editproduct/{id}',[productController::class,'edit']);

route::get('/produk',[transaksicontroller::class,'index']);

