<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/',[FrontendController::class,'index']);

Route::get('/about',[FrontendController::class,'index_about']);
Route::get('/team',[FrontendController::class,'index_team']);
Route::get('/contact',[FrontendController::class,'index_contact']);
Route::get('/curriculum',[FrontendController::class,'index_curriculum']);
Route::get('/notice-display/{id}',[FrontEndController::class,'notice'])->name('view.notice');
Route::get('/staff-profile/{id}',[FrontendController::class,'staffprofile'])->name('staff.profile');
Route::get('/ready-for-launch',[FrontendController::class,'launch'])->name('launch');
Route::get('/home2',[FrontendController::class,'index_index2']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth','is_admin'])->group(function(){
    
    Route::get('/dassboard','Backend\BackendController@index')->name('dassboard');
	Route::get('/profile','Backend\BackendController@indexProfile')->name('profile');
	Route::post('/user-update','Backend\BackendController@userUpdate')->name('user.update');
	Route::get('/publish','Backend\BackendController@publish')->name('publish');
	Route::post('/publish-update','Backend\BackendController@publishUpdate')->name('publishUpdate');
    Route::resource('employee', 'Backend\EmployeeController');
    Route::resource('notice', 'Backend\NoticeController');
    });

