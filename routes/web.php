<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/dashboard/children', function () {
    return view('dashboard.children.index');
})->name('child-index');
Route::get('/dashboard/children-create', function () {
    return view('dashboard.children.create');
})->name('child-create');

Route::get('/dashboard/family', function () {
    return view('dashboard.family.index');
})->name('family-index');
Route::get('/dashboard/registration', function () {
    return view('dashboard.registration.create');
})->name('family-create');

