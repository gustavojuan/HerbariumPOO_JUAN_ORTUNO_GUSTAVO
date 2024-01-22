<?php

use App\Models\Aquatic;
use App\Models\Arboreal;
use App\Models\Edibles;
use App\Models\Mammal;
use App\Models\Plant;
use Illuminate\Support\Facades\Route;

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

Route::delete('/plants/{id}', ['App\Http\Controllers\PlantController','delete'])->name('plants.delete');
Route::put('/plants/{id}', ['App\Http\Controllers\PlantController','update'])->name('plants.update');
Route::get('/plants/{id}/edit', ['App\Http\Controllers\PlantController','edit'])->name('plants.edit');
Route::post('/plants', ['App\Http\Controllers\PlantController','store'])->name('plants.store');
Route::get('/plants/create', ['App\Http\Controllers\PlantController','create']);
Route::get('/plants', ['App\Http\Controllers\PlantController','index'])->name('plants.index');;
Route::get('/plants/{name}', ['App\Http\Controllers\PlantController','show']);





