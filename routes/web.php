<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[LoginController::class,'redirect']);

/**
 * user
 */

Route::get('/',[HomeController::class,'index']);
Route::get('aboutUs',[AboutController::class,'index']);
Route::get('courses',[CourseController::class,'index']);


Route::get('contact',function (){
    return view('user.contact');
});

/**
 * admin
 */


/**
 * slides
 */
Route::get('product',[AdminController::class,'product']);
Route::post('uploadProduct',[AdminController::class,'uploadProduct']);
Route::get('showproduct',[AdminController::class,'showProduct']);
Route::get('/deleteproduct/{id}',[AdminController::class,'deleteProduct']);
Route::get('/updateview/{id}',[AdminController::class,'updateview']);
Route::post('/updateProduct/{id}',[AdminController::class,'updateProduct']);

/**
 * services
 */
Route::get('service',[ServiceController::class,'service']);
Route::post('uploadService',[ServiceController::class,'uploadService']);
Route::get('showService',[ServiceController::class,'showService']);
Route::get('/deleteService/{id}',[ServiceController::class,'deleteService']);
Route::get('/updateViewS/{id}',[ServiceController::class,'updateViewS']);
Route::post('/updateService/{id}',[ServiceController::class,'updateService']);

/**
 * about us
 */
Route::get('about',[AboutController::class,'about']);
Route::post('uploadAbout',[AboutController::class,'uploadAbout']);
Route::get('showAbout',[AboutController::class,'showAbout']);
Route::get('/deleteAbout/{id}',[AboutController::class,'deleteAbout']);
Route::get('/updateViewAbout/{id}',[AboutController::class,'updateViewAbout']);
Route::post('/updateAbout/{id}',[AboutController::class,'updateAbout']);

/**
 * categories
 */
Route::get('category',[CategoriesController::class,'category']);
Route::post('uploadCategory',[CategoriesController::class,'uploadCategory']);
Route::get('showCategory',[CategoriesController::class,'showCategory']);
Route::get('/deleteCategory/{id}',[CategoriesController::class,'deleteCategory']);
Route::get('/updateViewCategory/{id}',[CategoriesController::class,'updateViewCategory']);
Route::post('/updateCategory/{id}',[CategoriesController::class,'updateCategory']);

/**
 * courses
 */
Route::get('course',[CourseController::class,'course']);
Route::post('uploadCourse',[CourseController::class,'uploadCourse']);
Route::get('showCourse',[CourseController::class,'showCourse']);
Route::get('/deleteCourse/{id}',[CourseController::class,'deleteCourse']);
Route::get('/updateViewCourse/{id}',[CourseController::class,'updateViewCourse']);
Route::post('/updateCourse/{id}',[CourseController::class,'updateCourse']);

/**
 * team
 */
Route::get('team',[TeamController::class,'team']);
Route::post('uploadTeam',[TeamController::class,'uploadTeam']);
Route::get('showTeam',[TeamController::class,'showTeam']);
Route::get('/deleteTeam/{id}',[TeamController::class,'deleteTeam']);
Route::get('/updateViewTeam/{id}',[TeamController::class,'updateViewTeam']);
Route::post('/updateTeam/{id}',[TeamController::class,'updateTeam']);
