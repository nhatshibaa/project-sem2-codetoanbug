<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyGiftController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PostGiftsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestGiftController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
//Admin
Route::get('/admin',[LoginAdminController::class, 'index']);
Route::get('/admin/login',[LoginAdminController::class, 'login']);
Route::get('/admin/logout',[LoginAdminController::class, 'logout']);
Route::post('/admin/login',[LoginAdminController::class, 'store']);

Route::get('/admin/form',[ConfigController::class, 'create']);
Route::post('/admin/form',[ConfigController::class, 'store']);

Route::get('/admin/list-user',[RegisterController::class, 'index']);
Route::get('/admin/list-user-accept',[RegisterController::class, 'listUserAccept']);
Route::get('/admin/list-user-refuse',[RegisterController::class, 'listUserRefuse']);

Route::get('/admin/list-gift-accept',[PostGiftsController::class, 'listGiftAccept']);
Route::get('/admin/list-gift-refuse',[PostGiftsController::class, 'listGiftRefuse']);

Route::get('/admin/list-admin',[AdminController::class, 'listAdmin']);
Route::get('/admin/list-category',[AdminController::class, 'listCategory']);
Route::get('/admin/list-article',[AdminController::class, 'listArticle']);

//CRUD
Route::post('/admin/list-user/{id}',[RegisterController::class, 'update']);
Route::post('/admin/list-user-accept/{id}',[RegisterController::class, 'update']);
Route::delete('/admin/list-user/{id}',[RegisterController::class, 'destroy']);
Route::delete('/admin/list-user-refuse/{id}',[RegisterController::class, 'destroy']);

Route::post('/admin/list-gift/{id}',[PostGiftsController::class, 'update']);
Route::post('/admin/list-gift-accept/{id}',[PostGiftsController::class, 'update']);
Route::delete('/admin/list-gift/{id}',[PostGiftsController::class, 'destroy']);
Route::delete('/admin/list-gift-refuse/{id}',[PostGiftsController::class, 'destroy']);

Route::get('/admin/category/{id}/edit',[CategoryController::class,'edit']);
Route::post('/admin/category/{id}',[CategoryController::class,'update']);
Route::delete('/admin/category/{id}',[CategoryController::class,'destroy']);

Route::get('/admin/list-category',[CategoryController::class,'index']);
Route::get('/admin/create-category',[CategoryController::class,'create']);
Route::post('/admin/create-category',[CategoryController::class,'store']);

//User
Route::get('/',[IndexController::class, 'index']);
Route::get('/category',[CategoryController::class, 'category']);
Route::get('/blog',[UserController::class, 'blog']);
Route::get('/blog-detail',[UserController::class, 'blogDetail']);
Route::get('/about',[UserController::class, 'about']);
Route::get('/policy',[PolicyController::class, 'policy']);
Route::get('/contact',[UserController::class, 'contact']);
Route::get('/gift-detail/{id}',[UserController::class, 'gift']);
Route::post('/gift-detail/{id}', [RequestGiftController::class, 'store']);

//Register & Login
Route::get('/admin/list-user',[RegisterController::class, 'index']);
Route::get('/register',[RegisterController::class, 'create']);
Route::post('/admin/list-user',[RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout',[LoginController::class,'logout']);

//Post Gift
Route::get('/admin/list-gift',[PostGiftsController::class, 'index']);
Route::get('/post',[PostGiftsController::class, 'create']);
Route::post('/admin/list-gift',[PostGiftsController::class, 'store']);

//Import location
Route::get('/location/form', [\App\Http\Controllers\LocationController::class, 'getForm']);
Route::get('/location/city', [\App\Http\Controllers\LocationController::class, 'getCity']);
Route::get('/location/district', [\App\Http\Controllers\LocationController::class, 'getDistrict']);
Route::get('/location/ward', [\App\Http\Controllers\LocationController::class, 'getWard']);

//Mail
Route::get('/send-confirm', [SendEmailController::class, 'confirm']);
Route::get('/send-progress', [SendEmailController::class, 'progress']);
Route::get('/send-refuse', [SendEmailController::class, 'refuse']);

//Account
Route::get('/my-gift', [MyGiftController::class, 'index']);
Route::get('/my-request', [RequestGiftController::class, 'index']);
Route::post('/my-request/{id}', [RequestGiftController::class, 'update']);
Route::delete('/my-request/{id}', [RequestGiftController::class, 'destroy']);
