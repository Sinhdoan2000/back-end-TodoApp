<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
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
    return view('index');
});
Route::controller(todoController::class)->group(function(){
    Route::get('/api/todo', 'index');
    Route::get('/create', 'create');
    Route::post('/api/todo', 'store');
    Route::DELETE('/delete/{id}','destroy');
    Route::get('/detail/{id}', 'show');
    Route::patch('/update/{id}', 'update');
});

   
        