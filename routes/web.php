<?php

use App\Http\Controllers\admincontroller;
use Illuminate\Support\Facades\Route;




Route::get('/home', function () {
    return view('pelanggan.home');
});




route::get('/admin',[admincontroller::class,'index']);
route::get('/createadmin',[admincontroller::class,'create']);
route::post('/saveadmin',[admincontroller::class,'create']);

