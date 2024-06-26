<?php

use App\Http\Controllers\admincontroller;
use Illuminate\Support\Facades\Route;




Route::get('/home', function () {
    return view('pelanggan.home');
});




route::get('/admin',[admincontroller::class,'index']);
route::get('/createadmin',[admincontroller::class,'create']);
route::post('/saveadmin',[admincontroller::class,'store']);
Route::get('/editadmin/{id}',[adminController::class,'edit']);
Route::put('/updateadmin/{id}',[adminController::class,'update']);
Route::get('/deleteadmin/{id}',[adminController::class,'destroy']);

