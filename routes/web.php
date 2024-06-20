<?php

use App\Http\Controllers\admincontroller;
use Illuminate\Support\Facades\Route;




Route::get('/home', function () {
    return view('pelanggan.home');
});




route::get('/admin',[admincontroller::class,'index']);
route::get('/create',[admincontroller::class,'create']);
route::get('/saveadmin',[admincontroller::class,'create']);