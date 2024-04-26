<?php

use App\Http\Controllers\CreateEventsController;
use App\Http\Controllers\EditUsersController;
use App\Http\Controllers\EventAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyOrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('layouts.components.header');
})->name("test");

// Route::get('/home', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //* pages :
    // ^^ Home page :
    Route::get('/',[HomeController::class ,  "index"])->name("home");
    // ^^ Create events page :
    Route::get('/event', [CreateEventsController::class, 'index'])->name('event.index')->middleware("role:organizer|admin");
    Route::post('/event/create', [CreateEventsController::class, 'store'])->name('event.post');
    Route::put('/event/update/{event}', [CreateEventsController::class, 'update'])->name('event.update');
    Route::delete('/event/delete/{event}', [CreateEventsController::class, 'destroy'])->name('event.delete');
    Route::get('/calendar/events', [CreateEventsController::class , "show"]);
    // ^^ Edit_users page :
    Route::get('/edit/users', [EditUsersController::class, 'index'])->name('users.index')->middleware("role:admin"); //admin
    Route::put('/user/update/{user}', [EditUsersController::class, 'update'])->name('user.update');
    Route::delete('/user/delete/{user}', [EditUsersController::class, 'destroy'])->name('user.delete');
    // ^^ Edit_events_admin page :
    Route::get('/events/admin', [EventAdminController::class, 'index'])->name('event_admin.index')->middleware("role:admin"); //admin
    // ^^ Stripe page :
    // Route::get('/session' , [StripeController::class , "session"]);
    // ^^ Ticket page :
    Route::get('/home/ticket/{event}', [TicketsController::class, 'show'])->name('ticket.show');
    Route::post('/home/ticket/post', [TicketsController::class, 'store'])->name('ticket.post');
    Route::get('/success/{ticket}' , [TicketsController::class , "success"])->name('success');
    // ^^ MyOrder page :
    Route::get('/myorder', [MyOrderController::class, 'index'])->name('myorder.index');









});

require __DIR__.'/auth.php';
