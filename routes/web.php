<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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
Route::get('/', [PublicController:: class, 'welcome'])->name('welcome');
Route::get('/home', [PublicController:: class, 'home'])->name('home');
Route::get('/showAdmins', [PublicController:: class, 'showAdmins'])->name('showAdmins');
Route::post('/storeAdmin', [PublicController::class, "storeAdmin"])->name("storeAdmin");
Route::post('/storeTeam', [PublicController:: class, 'storeTeam'])->name('storeTeam');
Route::get('/showDev', [PublicController:: class, 'showDev'])->name('showDev');
Route::post('/storeDev', [PublicController::class, 'storeDev'])->name('storeDev');
Route::get('/indexDev', [PublicController::class, 'indexDev'])->name('indexDev');
Route::get('/showTeam', [PublicController::class, 'showTeam'])->name('showTeam');
Route::get('/edit/{dev}', [PublicController:: class, 'edit'])->name('edit');
Route::put('/update/{dev}', [PublicController:: class, 'update'])->name('update');
Route::delete('/destroy/{dev}', [PublicController:: class, 'destroy'])->name('destroy');
Route::get('/projects', [PublicController:: class, 'projects'])->name('projects');
Route::post('/storeProjects', [PublicController:: class, 'storeProjects'])->name('storeProjects');
Route::get('/showProjects', [PublicController:: class, 'showProjects'])->name('showProjects');
Route::get('/editP/{project}', [PublicController:: class, 'editP'])->name('editP');
Route::put('/updateProject/{project}', [PublicController:: class, 'updateProject'])->name('updateProject');
Route::delete('/destroyP/{project}', [PublicController:: class, 'destroyP'])->name('destroyP');
Route::get('/task', [PublicController:: class, 'task'])->name('task');
Route::post('/storeTask', [PublicController:: class, 'storeTask'])->name('storeTask');
Route::get('/showTask', [PublicController:: class, 'showTask'])->name('showTask');
Route::get('/indexProject', [PublicController:: class, 'indexProject'])->name('indexProject');