<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

// Route::get('/login', function () {
//     return view('login');
// });

//Route::post("/login",[UserController::class, 'login']);
Route::get("/",function(){
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/main",[App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::get('/changepassword', function(){
    return view('changePassword');
});

Route::post('/change/password',[App\Http\Controllers\ChangePasswordController::class, 'changePassword'])->name('profile.change.password');

Route::get('/employee', function(){
    return view('employee');
});

Route::get('/fetch/data', [App\Http\Controllers\EmployeeController::class, 'fetchEmployee']);

Route::post('/register/employee',[App\Http\Controllers\EmployeeController::class,'registerEmployee'])->name('employee.register');

Route::get('/file-import-export', [App\Http\Controllers\EmployeeController::class, 'fileImportExport']);
Route::post('/file-import', [App\Http\Controllers\EmployeeController::class, 'fileImport'])->name('file-import');
Route::get('/file-export', [App\Http\Controllers\EmployeeController::class, 'fileExport'])->name('file-export');
Route::get('/exporttopdf',[App\Http\Controllers\EmployeeController::class, 'exportToPDF'])->name('exporttopdf');