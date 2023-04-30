<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('class', [App\Http\Controllers\manage::class, 'index'])->name('class.index');
Route::get('create/class', [App\Http\Controllers\manage::class, 'create'])->name('create.class');
Route::post('store/class', [App\Http\Controllers\manage::class, 'store'])->name('store.class');
Route::get('class/delete/{id}', [App\Http\Controllers\manage::class, 'delete'])->name('class.delete');
Route::get('compute', [App\Http\Controllers\Compute::class, 'compute'])->name('compute.index');
Route::get('compute/spend', [App\Http\Controllers\Compute::class, 'spend'])->name('class.spend');
Route::get('compute/save', [App\Http\Controllers\Compute::class, 'save'])->name('class.save');
Route::get('compute/savings', [App\Http\Controllers\Compute::class, 'savings'])->name('class.savings');
Route::get('compute/what', [App\Http\Controllers\Compute::class, 'what'])->name('class.what');
Route::get('compute/find', [App\Http\Controllers\Compute::class, 'find'])->name('compute.find');
