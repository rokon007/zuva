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
Route::get('/home2',[FrontendController::class,'index_index2']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth','is_admin'])->group(function(){
    // Route::get('/dassboard',function(){
    //     return view('backend.dashboard.index');
    // })->name('dassboard');
    Route::get('/dassboard','Backend\BackendController@index')->name('dassboard');
	Route::get('/profile','Backend\BackendController@indexProfile')->name('profile');
   // Route::get('/category','Frontend\CategoryController@index')->name('category');
   // Route::post('insert-category','Frontend\CategoryController@insertcategory');
    //Route::get('/category-view/{id}','Frontend\CategoryController@category_view')->name('category.view');
    //Route::get('/category-edit/{id}','Frontend\CategoryController@category_edit')->name('category.edit');
   // Route::delete('/category/delete/{id}','Frontend\CategoryController@destroy');
    //Route::resource('product', 'Frontend\ProductController');
    });

