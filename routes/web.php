<?php
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('create/form',[FormController::class,'form'])->name('create.form');
Route::post('create/store',[FormController::class,'store'])->name('create.store');
Route::get('create/table',[FormController::class,'table'])->name('create.table');
Route::get('create/edit/{id}',[FormController::class,'edit'])->name('create.edit');
Route::post('create/update/{id}',[FormController::class,'update'])->name('create.update');
Route::get('create/delete/{id}',[FormController::class,'delete'])->name('create.delete');
