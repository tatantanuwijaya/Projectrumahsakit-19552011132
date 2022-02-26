<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/tambah_dokter_view',[AdminController::class,'tambahview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/my_appointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancel/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/artikellist',[HomeController::class,'articlepage']);

Route::get('/doctorlist',[HomeController::class,'doctorpage']);

Route::get('/about',[HomeController::class,'aboutpage']);

Route::get('/contact',[HomeController::class,'contactpage']);

Route::get('/add_artikel_view',[AdminController::class,'addartikelview']);

Route::post('/upload_artikel',[AdminController::class,'uploadartikel']);

Route::get('/artikelshow',[AdminController::class,'artikelshow']);

Route::get('/artikeldetail',[HomeController::class,'detail']);

Route::get('/artikeldelete/{id}',[AdminController::class,'artikeldelete']);

Route::get('/updateartikel/{id}',[AdminController::class,'updateartikel']);

Route::post('/editartikel/{id}',[AdminController::class,'editartikel']);

Route::get('/appointment',[AdminController::class],'appointmentexport');

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/my_bill',[HomeController::class,'mybill']);

Route::get('/add_bill_view',[AdminController::class,'bill']);

Route::post('/upload_bill',[AdminController::class,'uploadbill']);

Route::get('/billshow',[AdminController::class,'billshow']);

Route::get('/deletebill/{id}',[AdminController::class,'deletebill']);

Route::get('/updatebill/{id}',[AdminController::class,'updatebill']);

Route::post('/editbill/{id}',[AdminController::class,'editbill']);
