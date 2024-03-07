<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', function () {
    return redirect('/events');
});

Route::get('/events', [EventController::class, 'get']);

Route::get('/events/detail/{id}', [EventController::class, 'detail']);

Route::get('/events/create',[EventController::class,'createView']);

Route::post('/events/create',[EventController::class,'create']);

Route::get('/events/edit/{id}', [EventController::class, 'edit']);

Route::post('/events/update', [EventController::class, 'update']);

Route::get('/events/delete/{id}',[EventController::class,'delete']);

