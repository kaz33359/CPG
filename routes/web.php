<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::get('/login', [PagesController::class, 'login'])->name('login');


Route::get('/consultancy-services', [PagesController::class, 'consultancyServices'])->name('consultancy-services');
Route::get('/CSP-ASP-training', [PagesController::class, 'CSP_ASP_Training'])->name('CSP-ASP-training');
Route::get('/fire-protection-system', [PagesController::class, 'fire_protection_system'])->name('fire-protection-system');
Route::get('/OTHM', [PagesController::class, 'OTHM'])->name('OTHM');
Route::get('/safety-manpower-solution', [PagesController::class, 'safety_manpower_solution'])->name('safety-manpower-solution');
Route::get('/STED', [PagesController::class, 'STED'])->name('STED');




Route::get('/admin', [AdminController::class, 'admin'])->name('STED');

