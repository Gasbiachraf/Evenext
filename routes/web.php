<?php

use App\Http\Controllers\CreateEventsController;
use App\Http\Controllers\EditUsersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('layouts.components.header');
})->name("test");

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // ^^ Create events page :
    Route::get('/event', [CreateEventsController::class, 'index'])->name('event.index');
    Route::post('/event/create', [CreateEventsController::class, 'store'])->name('event.post');
    Route::put('/event/update/{event}', [CreateEventsController::class, 'update'])->name('event.update');
    Route::delete('/event/delete/{event}', [CreateEventsController::class, 'destroy'])->name('event.delete');
    Route::get('/calendar/events', [CreateEventsController::class , "show"]);
    // ^^ Edit_users page :
    Route::get('/edit/users', [EditUsersController::class, 'index'])->name('users.index');
    Route::put('/user/update/{user}', [EditUsersController::class, 'update'])->name('user.update');
    Route::delete('/user/delete/{user}', [EditUsersController::class, 'destroy'])->name('user.delete');




});

require __DIR__.'/auth.php';
