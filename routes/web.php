<?php

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


Route::resource('developers', App\Http\Controllers\DeveloperController::class);
Route::resource('sprints', App\Http\Controllers\SprintController::class);
Route::resource('tasks', App\Http\Controllers\TaskController::class);
Route::resource('product_backlogs', App\Http\Controllers\ProductBacklogController::class);
Route::resource('scrum_teams', App\Http\Controllers\ScrumTeamController::class);
Route::resource('scrum_masters', App\Http\Controllers\ScrumMasterController::class);
Route::resource('companies', App\Http\Controllers\CompanyController::class);
Route::resource('product_owners', App\Http\Controllers\ProductOwnerController::class);
Route::resource('burndown_charts', App\Http\Controllers\BurndownChartController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
