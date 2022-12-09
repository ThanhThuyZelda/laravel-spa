<?php

use App\Http\Controllers\Admin\MenuPositionController;
use App\Http\Controllers\Admin\MenuRoomController;
use App\Http\Controllers\Admin\MenuStaffController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MenuTypeServiceController;
use App\Http\Controllers\Admin\MenuServiceController;
use App\Http\Controllers\Admin\MenuBookingController;
use App\Http\Controllers\Admin\MenuFeedbackController;
use App\Http\Controllers\Admin\MenuNewsController;
use App\Http\Controllers\Admin\MenuThongKeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NhanVien\LichHenController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NhanVien\ThanhToanController;
use App\Http\Controllers\NhanVien\TuVanController;



use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'homepage']);


//Do du lieu ra trang chu

Route::get('/dich-vu', [HomeController::class, 'service'])->name('service');
Route::get('/trang-chu', [HomeController::class, 'homepage']);
//Route::get('/trang-chu', [HomeController::class, 'phanhoi'])->name('phanhoi');
Route::get('/dich-vu/{DV_id}', [HomeController::class, 'chitietDV'])->name('chitietDV');
Route::get('/dat-lich', [HomeController::class, 'booking'])->name('booking');
Route::post('/dat-lich', [HomeController::class, 'storeBooking'])->name('booking.store');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::post('/feedback', [HomeController::class, 'storeFeedback'])->name('feedback.store');
Route::get('/tin-tuc', [HomeController::class, 'news'])->name('news');
Route::get('/tin-tuc/{TT_id}', [HomeController::class, 'chitietTT'])->name('chitietTT');
Route::get('/tu-van', [HomeController::class, 'advise'])->name('advise');
Route::post('/tu-van', [HomeController::class, 'storeAdvise'])->name('advise.store');


Route::get('/admin/login', [UserController::class, 'login'])->name('login');
// Route::get('/admin', [UserController::class, 'admin'])->name('admin')->middleware('isLoggedIn');
Route::get('/admin/register', [UserController::class, 'register'])->middleware('alreadyLoggedIn');
Route::post('/admin/register-user',[UserController::class, 'registerUser'])->name('register-user');

Route::post('/admin/login-user',[UserController::class, 'loginUser'])->name('login-user');
Route::post('/admin/logout', [UserController::class,'logout'])->name('logout');

// NHAN VIEN
// Route::get('/nhanvien/login', [NhanVienController::class, 'login'])->name('NVlogin')->middleware('isLoggedIn');
// Route::post('/nhanvien/login-user',[NhanVienController::class, 'loginUser'])->name('login-nhanvien');
// Route::post('/nhanvien/logout', [NhanVienController::class,'logout'])->name('NVlogout');
  //nhanvien
Route::get('/nhanvien', [NhanVienController::class, 'nhanvien'])->name('nhanvien');
Route::resource('/nhanvien/lichhen', LichHenController::class);
Route::resource('/nhanvien/tuvan', TuVanController::class);
Route::resource('/nhanvien/thanhtoan', ThanhToanController::class);


Route::middleware(['isLoggedIn'])->group(function(){
  

    // admin
    Route::get('/admin', [UserController::class, 'admin'])->name('admin');
    //Chuc vu
    Route::get('/admin/menu/position', [MenuPositionController:: class, 'position']);


    // Danh sach phong
    Route::resource('/admin/menu/room', MenuRoomController:: class);
    //Tim kiem phong
    Route::get('/admin/menu/room/search', [MenuRoomController::class, 'searchRoom']);

    
    //Danh sach chuc vu
    Route::resource('admin/menu/position', MenuPositionController::class);
    
    //Danh sach nhan vien
    Route::resource('admin/menu/staff1', MenuStaffController::class);

    //Danh sach loai dich vu
    Route::resource('admin/menu/service_type', MenuTypeServiceController::class);

    //Danh sach dich vu
    Route::resource('admin/menu/service', MenuServiceController::class);
    Route::post('upload_image', [MenuServiceController::class, 'uploadImage'])->name('upload');
    
    //booking
    Route::resource('admin/menu/booking', MenuBookingController::class);

    //Danh sach tin tuc
    Route::resource('admin/menu/news', MenuNewsController::class);
    Route::post('upload_image', [MenuNewsController::class, 'uploadImage'])->name('upload');

    //Danh sach phan hoi cua khach hang
    Route::resource('admin/menu/feedback', MenuFeedbackController::class);

    //Thong ke
     Route::resource('admin/menu/statistical', MenuThongKeController::class);
});