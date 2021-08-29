<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/login', [StudentController::class, 'index'])->name('login');


Route::get('/consultancy-services', [PagesController::class, 'consultancyServices'])->name('consultancy-services');
Route::get('/CSP-ASP-training', [PagesController::class, 'CSP_ASP_Training'])->name('CSP-ASP-training');
Route::get('/fire-protection-system', [PagesController::class, 'fire_protection_system'])->name('fire-protection-system');
Route::get('/OTHM', [PagesController::class, 'OTHM'])->name('OTHM');
Route::get('/safety-manpower-solution', [PagesController::class, 'safety_manpower_solution'])->name('safety-manpower-solution');
Route::get('/STED', [PagesController::class, 'STED'])->name('STED');


Route::get('student', [StudentController::class, 'index']);
Route::post('student/auth', [StudentController::class, 'auth'])->name('student.auth');

Route::group(['middleware' => 'student_auth'], function () {

    Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::get('student/logout', function () {
        session()->forget('STUDENT_LOGIN');
        session()->forget('STUDENT_ID');
        session()->flash('logout', 'Logout Successfully');
        return redirect('student');
    });
    
});



Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware'=> 'admin_auth'],function(){
    Route::get('admin/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('logout', 'Logout Successfully');
        return redirect('admin');
    });

    Route::get('admin/students', [AdminController::class, 'students'])->name('students');
    // Route::post('admin/studentregistraiton', [AdminController::class, 'studentregistraiton'])->name('admin.studentregistraiton');
    Route::post('admin/studentregistraiton', [AdminController::class, 'studentregistraiton']);
    Route::get("/delete_student/{id}", [AdminController::class, "delete_student"]);
    Route::get("/status_student/{id}", [AdminController::class, "status_student"]);
    // Route::post('admin/studentRegistration_process', [AdminController::class, 'studentRegistration_process'])->name('admin.studentRegistration_process');


});

// Route::group(['middleware'=> 'admin_auth'],function(){
//     Route::get('admin/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    
//     Route::get('admin/logout', function () {
//         session()->forget('ADMIN_LOGIN');
//         session()->forget('ADMIN_ID');
//         session()->flash('logout', 'Logout Successfully');
//         return redirect('admin');
//     });

//     Route::get('admin/students', [AdminController::class, 'students'])->name('students');
//     // Route::post('admin/studentregistraiton', [AdminController::class, 'studentregistraiton'])->name('admin.studentregistraiton');
//     Route::post('admin/studentregistraiton', [AdminController::class, 'studentregistraiton']);
//     Route::get("/delete_student/{id}", [AdminController::class, "delete_student"]);
//     // Route::post('admin/studentRegistration_process', [AdminController::class, 'studentRegistration_process'])->name('admin.studentRegistration_process');


// });

// Route::get('/admin/login', [AdminController::class, 'admin_login'])->name('admin_login');
// Route::get('/admin/students', [AdminController::class, 'students'])->name('students');
// Route::get('/admin/admin-profile', [AdminController::class, 'admin_profile'])->name('admin_profile');

