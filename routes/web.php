<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formcontroller;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route>*/
// Route::get('/product','product');
// Route::post('/product','product');
// Route::get('/product',[HomeController::class,'product']);
// Route::post('/product',[HomeController::class,'product']);
// Route::view('/product','product');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/form',[Formcontroller::class,'form']);
Route::get('/show',[Formcontroller::class,'show']);
Route::get('/delete/{id}',[Formcontroller::class,'delete']);
Route::get('/update/{id}',[Formcontroller::class,'update']);
Route::post('/store_data',[Formcontroller::class,'store_data']);
Route::post('/update_data/{id}',[Formcontroller::class,'update_data']);
Route::get('search_data',[Formcontroller::class,'search_data']);
Route::get('/addproduct',[HomeController::class,'addproduct']);
Route::post('/insertproduct',[HomeController::class,'insertproduct']);
Route::get('/viewproduct',[HomeController::class,'viewproduct']);
