<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\User\StudentController;
use App\Http\Controllers\User\FrontendController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\WorkController;
use Illuminate\Support\Facades\Artisan;
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


//Frontend Routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/training-register', [FrontendController::class, 'registerTrainingStudent'])->name('registerTrainingStudent');
Route::resource('/student-register', StudentController::class);
Route::get('/training-certificate', [FrontendController::class, 'trainingCertificate'])->name('trainingCertificate');
Route::get('/contact-us',[FrontendController::class,'contact'])->name('contact');
Route::post('/contact-us',[FrontendController::class,'enquiry'])->name('enquiry');
Route::get('/services',[FrontendController::class,'services'])->name('services');
Route::get('/works',[FrontendController::class,'works'])->name('works');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::post('news-letter',[FrontendController::class,'news_letter'])->name('newsletter');
//Backend Routes
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::post('/login', [AdminController::class, 'login'])->name('login');

Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => 'auth'],function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('logout',[AdminController::class,'logout'])->name('logout');

    Route::resource('user',UserController::class);
    Route::resource('role',RoleController::class);
    Route::resource('permission',PermissionController::class);
    Route::get('user-permission',[PermissionController::class,'userPermission'])->name('userPermission');
    Route::post('assign-permission',[PermissionController::class,'assignPermission'])->name('assignPermission');
    Route::get('roles-has-permission',[PermissionController::class,'roleHasPermission'])->name('roleHasPermission');
    Route::get('view-role/{id}',[RoleController::class,'viewRole'])->name('viewRole');

    Route::get('change-password',[UserController::class, 'changePassword'])->name('fileuser.changepassword');
    Route::post('update-profile',[UserController::class, 'updateProfile'])->name('fileuser.updateProfile');
    Route::post('update-password',[UserController::class, 'updatePassword'])->name('fileuser.updatePassword');

    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::post('blog-store',[BlogController::class,'store'])->name('blog-store');
    Route::post('blog-delete/{id}',[BlogController::class,'destroy'])->name('blog-delete');
    Route::get('blog-edit/{id}',[BlogController::class,'edit'])->name('blog-edit');
    Route::resource('student',AdminStudentController::class);
    Route::resource('service',ServicesController::class);
    Route::resource('work',WorkController::class);
    Route::resource('blog-category',BlogCategoryController::class);

});


Route::get('/optimize', function(){
    Artisan::call('optimize');
});
Route::get('/optimize-clear', function(){
    Artisan::call('optimize:clear');
});
