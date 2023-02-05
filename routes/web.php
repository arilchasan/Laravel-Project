<?php

use App\Http\Controllers\Dashboard\DashboarGerbongController;
use App\Http\Controllers\Dashboard\DashboarPenumpangController;
use App\Http\Controllers\Dashboard\DashboarTujuanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Gerbong;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TujuanController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about' , function(){
    return view('about');
});

Route::group(["prefix" => "/register"], function () {
    Route::get('/all' ,[RegisterController::class,'index'])->middleware('guest');
    Route::get('/create', [RegisterController::class, 'create']);
    Route::post('/add', [RegisterController::class, 'store']);
});



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/auth', [LoginController::class,'auth']);

Route::post('/logout', [LoginController::class, 'logout']);




Route::group(["prefix" => "/Penumpang"],function(){
    Route::get('/all' ,[PenumpangController::class,'index']);
    Route::get('/detail/{penumpang}' ,[PenumpangController::class,'show']);
    Route::get('/create',[PenumpangController::class,'create']);    
    Route::post('/add',[PenumpangController::class,'store']);
    Route::delete('/delete/{penumpang}',[PenumpangController::class,'destroy']);
    Route::get('/edit/{penumpang}',[PenumpangController::class,'edit']);
    Route::post('/update/{penumpang}',[PenumpangController::class,'update']);
});

Route::group(["prefix" => "/Tujuan"],function(){
    Route::get('/tampilan' ,[TujuanController::class,'index']);
    Route::get('/detail/{tujuan}' ,[TujuanController::class,'show']);
    
});
Route::group(["prefix" => "/gerbong"],function(){
    Route::get('/about' ,[Gerbong::class,'index']);
    Route::get('/detail/{gerbong}' ,[Gerbong::class,'show']);
    
});



Route::group(["prefix" => "/dashboard"],function(){
    Route::get('/index',function(){
        return view('dashboard.index');
    })->middleware('auth');


    //route group gerbong
    Route::group(["prefix" => "/gerbong"],function(){
        Route::get('/detail/{gerbong}' ,[DashboarGerbongController::class,'show']);    
    });

    //route group tujuan
    Route::group(["prefix" => "/tujuan"],function(){
        Route::get('/detail/{tujuan}' ,[DashboarTujuanController::class,'show']);    
    });
    //route gruoup penumpang
    Route::group(["prefix" => "/penumpang"],function(){
        Route::get('/all' ,[DashboarPenumpangController::class,'index']);
        Route::get('/detail/{penumpang}' ,[DashboarPenumpangController::class,'show']);
        Route::get('/create',[DashboarPenumpangController::class,'create']);
        Route::post('/add',[DashboarPenumpangController::class,'store']);
        Route::delete('/delete/{penumpang}',[DashboarPenumpangController::class,'destroy']);
        Route::get('/edit/{penumpang}',[DashboarPenumpangController::class,'edit']);
        Route::post('/update/{penumpang}',[DashboarPenumpangController::class,'update']);

    });
    //route sidebar  
    Route::get('/p' ,[DashboardController::class,'p']);
    Route::get('/t' ,[DashboardController::class,'t']);
    Route::get('/g' ,[DashboardController::class,'g']);
});

// Route::group(["prefix" => "/gerbong"],function(){
//     Route::get('/detail/{gerbong}' ,[DashboardPenumpangController::class,'show']);
    
// });

// Route::get('/dashboardgerbong/detail/{gerbong}' ,[DashboarGerbongController::class,'show']);
