<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
use Illuminate\Routing\RouteGroup;
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



Route::get('/login', function (){
    return view('pengguna.login');
})->name('login');

Route::get('/buku',[BukuController::class,'index']);
Route::get('/buku/create',[BukuController::class,'create']);
Route::post('/buku/store',[BukuController::class,'store']);
Route::get('/buku/{id}/edit',[BukuController::class,'edit']);
Route::put('/buku/{id} ',[BukuController::class,'update']);
Route::delete('/buku/{id} ',[BukuController::class,'destroy']);
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::Group(['middleware' => ['auth']], function () {
    Route::get('/buku',[BukuController::class,'index']);
    Route::get('/', function () {
        return view('buku.master');
    });
});