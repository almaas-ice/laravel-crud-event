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

Route::get('/events', [EventController::class, 'getEvents']);

Route::get('/events/detail/{id}', [EventController::class, 'getEventDetail']);

Route::get('/events/create', [EventController::class, 'createEventForm']);

Route::post('/events/create', [EventController::class, 'createEvent']);

Route::get('/events/edit/{id}', [EventController::class, 'updateEventForm']);

Route::put('/events/edit/{id}', [EventController::class, 'updateEvent']);

Route::get('/events/delete/{id}', [EventController::class, 'deleteEvent']);
