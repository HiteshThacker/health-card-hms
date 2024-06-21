<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fe\HomeCon;
use App\Http\Controllers\PatientCon;
use App\Http\Controllers\admin\AdminCon;
use App\Http\Controllers\admin\OpCon;
use App\Models\Patient;
use App\Models\LogData;

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

Route::post('/mail',[HomeCon::class,'sndmail']);

Route::get('/',[HomeCon::class,'index']);
Route::get('/about',[HomeCon::class,'about']);
Route::get('/services',[HomeCon::class,'services']);
Route::get('/doctors',[HomeCon::class,'doctors']);
Route::get('/card',[HomeCon::class,'card']);
Route::get('/help',[HomeCon::class,'help']);
Route::get('/booking',[HomeCon::class,'booking']);
Route::post('/booking',[PatientCon::class,'booking']);
Route::post('/bkslot',[PatientCon::class,'chkslot']);

Route::get('/services/{id}',[HomeCon::class,'service']);
Route::get('/blog/{id}',[HomeCon::class,'blog']);
Route::post('/card',[HomeCon::class,'print']);
Route::get('/faq',[HomeCon::class,'faq']);


Route::get('/login',[HomeCon::class,'login']);
Route::post('/login',[HomeCon::class,'check']);
Route::get('/logout',[HomeCon::class,'logout']);

Route::get('/signin',[HomeCon::class,'signin']);
Route::post('/verify',[HomeCon::class,'verify']);//verify
Route::post('/otp_gen',[HomeCon::class,'otpgen']);
Route::get('/signup',[HomeCon::class,'signup']);

// Route::post('/insert',[PatientCon::class,'insert']);
Route::post('/insert',[PatientCon::class,'insert']);
Route::get('/up_profile',[PatientCon::class,'edit']);
Route::post('/update',[PatientCon::class,'update']);
Route::get('/change_pass',[PatientCon::class,'pass']);
Route::post('/change_pass',[PatientCon::class,'password']);
Route::get('/forget_pass',[PatientCon::class,'forget']);




//Admin Route start
// Route::get('/admin/',[AdminCon::class],'login');
//manage hospital

Route::middleware(['login'])->group(function(){
    //protected

    Route::post('/official/addnews',[OpCon::class,'addnews']);

    Route::get('/official/doctors/verify',[AdminCon::class,'dverify'])->middleware('role');
    Route::post('/official/doctors/verify',[AdminCon::class,'dotp'])->middleware('role');
    Route::post('/official/doctors/con_otp',[AdminCon::class,'dcon_otp'])->middleware('role');
    Route::get('/official/doctors/list',[AdminCon::class,'dlist'])->middleware('role');
    Route::get('/official/doctors/add',[AdminCon::class,'add_doc'])->middleware('role');
    Route::post('/official/doctors/add',[OpCon::class,'add_doc'])->middleware('role');
    Route::get('/official/doctors/delete/{id}',[OpCon::class,'delete_doc'])->middleware('role');
    Route::get('/official/doctors/update/{id}',[AdminCon::class,'update_doc'])->middleware('role');
    Route::post('/official/doctors/update/{id}',[OpCon::class,'update_doc'])->middleware('role');


    Route::get('/official/patients/verify',[AdminCon::class,'verify']);
    Route::post('/official/patients/verify',[AdminCon::class,'otp']);
    Route::post('/official/patients/con_otp',[AdminCon::class,'con_otp']);
    Route::get('/official/patients/add',[AdminCon::class,'add_pat']);
    Route::post('/official/patients/add',[OpCon::class,'add_patient']);
    Route::get('/official/patients/update/{id}',[AdminCon::class,'update_patient']);
    Route::post('/official/patients/update/{id}',[OpCon::class,'update_patient']);
    Route::get('/official/patients/delete/{id}',[OpCon::class,'delete_pat'])->middleware('role');
    Route::get('/official/patients/pending_update',[AdminCon::class,'pending_update']);
    Route::get('/official/patients/all_update',[AdminCon::class,'all_update']);
    Route::get('/official/patients/pending_update/{id}',[OpCon::class,'pending_update']);
    Route::get('/official/patients/confirm_update/{id}',[OpCon::class,'confirm_update']);
    Route::get('/official/patients/list',[AdminCon::class,'plist']);


    Route::get('/official/appointments/pending',[AdminCon::class,'app']);
    Route::get('/official/appointments/approve/{id}',[AdminCon::class,'approve']);
    Route::get('/official/appointments/list',[AdminCon::class,'applist']);


    Route::get('/official/report',[AdminCon::class,'report'])->middleware('login');
    Route::get('/official/report/add',[AdminCon::class,'addreport']);
    Route::post('/official/report/add',[OpCon::class,'addreport']);
    Route::get('/official/report/delete/{id}',[OpCon::class,'delete_report'])->middleware('role');

    Route::get('/official/hospital',[AdminCon::class,'hospital'])->middleware('role');
    Route::get('/official/hospital/add',[AdminCon::class,'addhospital'])->middleware('role');
    Route::post('/official/hospital/add',[OpCon::class,'addhospital'])->middleware('role');
    Route::get('/official/hospital/update/{id}',[AdminCon::class,'up_hospital'])->middleware('role');
    Route::post('/official/hospital/update/{id}',[OpCon::class,'up_hospital'])->middleware('role');
    Route::get('/official/hospital/delete/{id}',[OpCon::class,'delete_hospital'])->middleware('role');

    Route::get('/official/blogs/list',[AdminCon::class,'blist'])->middleware('role');
    Route::get('/official/blogs/add',[AdminCon::class,'addblog'])->middleware('role');
    Route::post('/official/blogs/add',[OpCon::class,'addblog'])->middleware('role');
    Route::get('/official/blogs/update/{id}',[AdminCon::class,'up_blog'])->middleware('role');
    Route::post('/official/blogs/update/{id}',[OpCon::class,'up_blog'])->middleware('role');
    Route::get('/official/blogs/delete/{id}',[OpCon::class,'delete_blog'])->middleware('role');


    Route::get('/official/data/add',[AdminCon::class,'adddata']);
    Route::post('/official/data/uploads',[OpCon::class,'uploadsdata']);
    Route::post('/official/data/chkdata',[AdminCon::class,'chkdata']);
    Route::get('/official/data/view',[AdminCon::class,'viewdataall']);
    Route::get('/official/data/view/{id}',[AdminCon::class,'viewdata']);

    Route::get('/official/data_analysis/charts',[AdminCon::class,'charts'])->middleware('role');


    Route::get('/official/about',[AdminCon::class,'about']);
    Route::get('/official/profile',[AdminCon::class,'profile']);
    // Route::post('/official/profile/update/{id}',[OpCon::class,'edit_profile']);

    Route::post('/official/profile/update/{id}',[OpCon::class,'edit_profile']);
    Route::post('/official/profile/pass',[OpCon::class,'edit_pass']);


});

Route::get('/official',[AdminCon::class,'index']);
Route::get('/official/forget',[AdminCon::class,'_forget']);
Route::post('/official/forget',[AdminCon::class,'forget']);
Route::post('/official/login',[AdminCon::class,'login']);
Route::get('/official/logout',[AdminCon::class,'logout']);



