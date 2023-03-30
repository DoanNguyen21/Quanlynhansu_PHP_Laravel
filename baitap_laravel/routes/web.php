<?php

use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\EmployeeController;
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

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/employee', [LoginController::class, 'employee']);

Route::middleware(['auth'])->group(function(){

    Route::prefix('admin')->group(function(){
 
    Route::get('/', [MainController::class, 'index'])->name('admin');
    Route::get('main', [MainController::class, 'index']);
    
    
    
    Route::prefix('menus')->group(function(){
        Route::get('addemployee',[EmployeeController::class, 'create_employee']);
        Route::post('addemployee',[EmployeeController::class, 'employee']);
        Route::get('listemployee',[EmployeeController::class, 'index'])->name('listemploye');
        Route::get('destroyemployee/{id}',[EmployeeController::class, 'destroyemployee'])->name('destroyemployee');


        Route::get('addcustomer',[CustomerController::class, 'create_customer']);
        Route::post('addemcustomer',[CustomerController::class, 'customer'])->name('addCustomer');
        Route::get('listcustomer',[CustomerController::class,'index2'])->name('listcustomer'); 
        Route::get('destroycustomer/{id}',[CustomerController::class, 'destroycustomer'])->name('destroycustomer');
     });
    
    });

});