<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseEnquiriesController;

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
Route::get('/courses/all', [PagesController::class, 'all_courses'])->name('all_courses');
Route::get('/IOSH-managing-safely', [PagesController::class, 'IOSH_managing_safely'])->name('IOSH-managing-safely');
Route::get('/IOSH-train-the-trainer', [PagesController::class, 'IOSH_train_the_trainer'])->name('IOSH-train-the-trainer');
Route::get('/NVQ', [PagesController::class, 'NVQ'])->name('NVQ');
Route::get('/ISO', [PagesController::class, 'ISO'])->name('ISO');
Route::get('/STI-USA', [PagesController::class, 'STI_USA'])->name('STI-USA');
Route::get('/CPD_UK', [PagesController::class, 'CPD_UK'])->name('CPD-UK');


Route::get('student', [StudentController::class, 'index']);
Route::post('student/auth', [StudentController::class, 'auth'])->name('student.auth');


Route::post('course/register', [CourseEnquiriesController::class, 'course_register'])->name('course.register');

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
    
    Route::get('admin/logout', function ()  {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('logout', 'Logout Successfully');
        return redirect('admin');
    })->name('logout');

    Route::get('admin/students', [AdminController::class, 'students'])->name('students');
    Route::any('admin/studentregistraiton', [AdminController::class, 'studentregistraiton'])->name('studentregistraiton');
    Route::post('admin/updatestudents/{id}', [AdminController::class, 'updatestudents'])->name('updatestudents');
    Route::get("/delete_student/{id}", [AdminController::class, "delete_student"]);
    Route::get("/status_student/{id}", [AdminController::class, "status_student"]);
    Route::get('admin/student_profile/{id}', [AdminController::class, 'viewStudents'])->name('student_profile');

    Route::get('admin/courses', [AdminController::class, 'courses'])->name('courses');
    Route::post('admin/addcourse', [AdminController::class, 'addCourse'])->name('addcourse');
    Route::post('admin/updatecourse/{id}', [AdminController::class, 'updatecourse'])->name('updatecourse');
    Route::get("/delete_course/{id}", [AdminController::class, "delete_Course"]);
    Route::get("/status_course/{id}", [AdminController::class, "status_Course"]);
    Route::get('admin/view_course/{id}', [AdminController::class, 'viewCourse'])->name('viewCourse');


    Route::get('admin/module', [AdminController::class, 'module'])->name('module');
    Route::post('admin/addmodule', [AdminController::class, 'addmodule'])->name('addmodule');
    Route::get("/delete_module/{id}", [AdminController::class, "delete_module"]);
    Route::get("/status_module/{id}", [AdminController::class, "status_module"]);

    Route::get('admin/chapter', [AdminController::class, 'chapter'])->name('chapter');
    Route::post('admin/addchapter', [AdminController::class, 'addchapter'])->name('addchapter');
    Route::get("/delete_chapter/{id}", [AdminController::class, "delete_chapter"]);
    Route::get("/status_chapter/{id}", [AdminController::class, "status_chapter"]);

    Route::get('admin/topic', [AdminController::class, 'topic'])->name('topic');
    Route::post('admin/addtopic', [AdminController::class, 'addtopic'])->name('addtopic');
    Route::get("/delete_topic/{id}", [AdminController::class, "delete_topic"]);
    Route::get("/status_topic/{id}", [AdminController::class, "status_topic"]);

    Route::get('admin/material', [AdminController::class, 'material'])->name('material');
    Route::post('admin/addmaterial', [AdminController::class, 'addmaterial'])->name('addmaterial');
    Route::get("/delete_material/{id}", [AdminController::class, "delete_material"]);
    Route::get("/status_material/{id}", [AdminController::class, "status_material"]);

    Route::get('admin/course_enquiries', [AdminController::class, 'courseEnquiries'])->name('courseEnquiries');
    Route::get('/delete_course_enquiries/{id}', [AdminController::class, 'deleteCourseEnquiries']);


    // Route::get("/get_module/{id}", [AdminController::class, "get_module"]);
    // Route::get("/get_chapter/{id}", [AdminController::class, "get_chapter"]);



});