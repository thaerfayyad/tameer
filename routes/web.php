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
Route::get('/dashboard/safety-plan-one', function () {
    return view('dashboard.safety_plan_one.create');
})->name('safety_one-create');

Route::get('/dashboard/safety-plan-two', function () {
    return view('dashboard.safety_plan_two.create');
})->name('safety_two-create');
Route::get('/dashboard/initial-form', function () {
    return view('dashboard.initial_form.create');
})->name('initial_form-create');

Route::get('/dashboard/whole-form', function () {
    return view('dashboard.whole_form.create');
})->name('whole_form-create');

Route::get('/dashboard/state-plan', function () {
    return view('dashboard.state_plan.create');
})->name('state_plan-create');

Route::get('/dashboard/revision-plan', function () {
    return view('dashboard.revision_plan.create');
})->name('revision_plan-create');

Route::get('/dashboard/approval-for-safety', function () {
    return view('dashboard.approval_for_safety.create');
})->name('approval-create');

Route::get('/dashboard/follow-up-date', function () {
    return view('dashboard.follow_form.create');
})->name('follow-create');

Route::get('/dashboard/status-form', function () {
    return view('dashboard.status_form.create');
})->name('status_form-create');

Route::get('/dashboard/transfer-case', function () {
    return view('dashboard.transfer_case.create');
})->name('transfer_case-create');

Route::get('/dashboard/closing-case', function () {
    return view('dashboard.closing_case_form.create');
})->name('closing_case-create');
