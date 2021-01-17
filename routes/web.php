<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DataCmbController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\BiayaStudiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\FormregistController;



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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);
// Route::get('/', [PagesController::class, 'home']);

//depan
Route::get('/', [DepanController::class, 'home']);

//pendaftaran
Route::get('/formPendaftaran', [FormregistController::class, 'index']);
Route::post('/formPendaftaran', [FormregistController::class, 'getRegencie']);
Route::post('/formPendaftaran', [FormregistController::class, 'getDistrict']);
Route::post('/formPendaftaran', [FormregistController::class, 'getVillage']);




Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/home', [PagesController::class, 'home']);

    // data mahasiswa baru
    Route::get('/datamhs', [DataCmbController::class, 'index']);
    Route::get('/datamhs/{data_cmb}', [DataCmbController::class, 'show']);
    Route::get('/datamhs/{data_cmb}/edit', [DataCmbController::class, 'edit']);
    Route::patch('/datamhs/{data_cmb}', [DataCmbController::class, 'update']);
    Route::delete('/datamhs/{data_cmb}', [DataCmbController::class, 'destroy']);


    //beasiswa
    Route::get('/beasiswa', [BeasiswaController::class, 'index']);
    Route::get('/beasiswa/create', [BeasiswaController::class, 'create']);
    Route::post('/beasiswa', [BeasiswaController::class, 'store']);
    Route::get('/beasiswa/{beasiswa}/edit', [BeasiswaController::class, 'edit']);
    Route::patch('/beasiswa/{beasiswa}', [BeasiswaController::class, 'update']);
    Route::delete('/beasiswa/{beasiswa}', [BeasiswaController::class, 'destroy']);

    //biayaStudi
    Route::get('/biayaStudi', [BiayaStudiController::class, 'index']);
    Route::get('/biayaStudi/create', [BiayaStudiController::class, 'create']);
    Route::post('/biayaStudi', [BiayaStudiController::class, 'store']);
    Route::delete('/biayaStudi/{biayaStudi}', [BiayaStudiController::class, 'destroy']);




    //Fasilitas
    Route::get('/fasilitas', [FasilitasController::class, 'index']);
    Route::get('/fasilitas/create', [FasilitasController::class, 'create']);
    Route::post('/fasilitas', [FasilitasController::class, 'store']);
    Route::delete('/fasilitas/{fasilitas}', [FasilitasController::class, 'destroy']);


    //ukm
    Route::get('/ukm', [UkmController::class, 'index']);
    Route::get('/ukm/create', [UkmController::class, 'create']);
    Route::post('/ukm', [UkmController::class, 'store']);
    Route::get('/ukm/{ukm}', [UkmController::class, 'show']);
    Route::get('/ukm/{ukm}/edit', [UkmController::class, 'edit']);
    Route::patch('/ukm/{ukm}', [UkmController::class, 'update']);
    Route::delete('/ukm/{ukm}', [UkmController::class, 'destroy']);





    //download
    Route::get('/download', [DownloadController::class, 'index']);
    Route::get('/download/create', [DownloadController::class, 'create']);
    Route::post('/download', [DownloadController::class, 'store']);
    Route::get('/download/{download}', [DownloadController::class, 'show']);
    Route::get('/download/{download}/edit', [DownloadController::class, 'edit']);
    Route::patch('/download{download}', [DownloadController::class, 'update']);
    Route::delete('/download/{download}', [DownloadController::class, 'destroy']);

    //data sekolah
    Route::get('/datasekolah', [DataSekolahController::class, 'index']);


    //user
    Route::get('/kelolaAkun', [UserController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'checkRole:admin,ketua']], function () {
    Route::get('/home', [PagesController::class, 'home']);
});
