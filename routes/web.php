<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PostGiftsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\UserController;
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
//Admin
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/admin/form',[ConfigController::class, 'create']);
Route::post('/admin/form',[ConfigController::class, 'store']);

Route::get('/admin/list-user',[RegisterController::class, 'index']);

Route::get('/admin/list-user-accept',[RegisterController::class, 'listUserAccept']);
Route::get('/admin/list-user-refuse',[RegisterController::class, 'listUserRefuse']);
Route::post('/admin/list-user/{id}',[RegisterController::class, 'update']);
Route::post('/admin/list-user-accept/{id}',[RegisterController::class, 'update']);
Route::delete('/admin/list-user/{id}',[RegisterController::class, 'destroy']);
Route::delete('/admin/list-user-refuse/{id}',[RegisterController::class, 'destroy']);

Route::get('/admin/list-gift',[PostGiftsController::class, 'index']);
Route::get('/admin/list-gift-accept',[PostGiftsController::class, 'listGiftAccept']);
Route::get('/admin/list-gift-refuse',[PostGiftsController::class, 'listGiftRefuse']);
Route::post('/admin/list-gift/{id}',[PostGiftsController::class, 'update']);
Route::post('/admin/list-gift-accept/{id}',[PostGiftsController::class, 'update']);
Route::delete('/admin/list-gift/{id}',[PostGiftsController::class, 'destroy']);
Route::delete('/admin/list-gift-refuse/{id}',[PostGiftsController::class, 'destroy']);


Route::get('/admin/list-admin',[AdminController::class, 'listAdmin']);
Route::get('/admin/list-category',[AdminController::class, 'listCategory']);
Route::get('/admin/list-article',[AdminController::class, 'listArticle']);

//User
Route::get('/',[UserController::class, 'index']);
Route::get('/category',[UserController::class, 'category']);
Route::get('/blog',[UserController::class, 'blog']);
Route::get('/blog-detail',[UserController::class, 'blogDetail']);
Route::get('/about',[UserController::class, 'about']);
Route::get('/policy',[PolicyController::class, 'policy']);
Route::get('/contact',[UserController::class, 'contact']);
Route::get('/gift-detail',[UserController::class, 'gift']);

//Register & Login
Route::get('/admin/list-user',[RegisterController::class, 'index']);
Route::get('/register',[RegisterController::class, 'create']);
Route::post('/admin/list-user',[RegisterController::class, 'store']);

//Post Gift
Route::get('/admin/list-gifts',[PostGiftsController::class, 'index']);
Route::get('/post',[PostGiftsController::class, 'create']);
Route::post('/post',[PostGiftsController::class, 'store']);

Route::get('/send-mail', [SendEmailController::class, 'send']);

Route::get('/location/form', [\App\Http\Controllers\LocationController::class, 'getForm']);
Route::get('/location/city', [\App\Http\Controllers\LocationController::class, 'getCity']);
Route::get('/location/district', [\App\Http\Controllers\LocationController::class, 'getDistrict']);
Route::get('/location/ward', [\App\Http\Controllers\LocationController::class, 'getWard']);
