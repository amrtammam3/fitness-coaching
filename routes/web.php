<?php

use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\ClientDashboardController;

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;


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
    return view('home');
});


use App\Http\Controllers\ClientFormController;
use App\Http\Controllers\CoachDashboardController;
use App\Http\Controllers\ClientDashboardController;

// Display the payment page
Route::get('/payment', function () {
    return view('payment'); // Make sure you have a payment.blade.php file in resources/views
})->name('payment');

// Handle form submissions for client dashboard (use 'post' if needed)
Route::post('/client-dashboard', [ClientFormController::class, 'store'])
    ->name('client.form.store');
    // ->middleware('auth');

// Display the coach dashboard
Route::get('/coach-dashboard', [CoachDashboardController::class, 'index'])
    ->name('coach.dashboard')->middleware('auth');

// Display the client dashboard (GET method)
Route::get('/client-dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard');

    // Route::post('/client-dashboard/store', [ClientDashboardController::class, 'store'])
    // ->middleware('auth')
    // ->name('client.form.dashboard');

// Handle form submissions for client dashboard (use 'post' if needed)
// Route::post('/client-dashboard', [ClientDashboardController::class, 'store'])
//     ->middleware('auth')
//     ->name('client.form.dashboard');



// Route::get('/payment', function () {
//     return view('payment'); // Make sure you have a payment.blade.php file in resources/views
// })->name('payment');

// use App\Http\Controllers\ClientFormController;

// Route::post('/client-dashboard', [ClientFormController::class, 'store'])->name('client.form.submit')->middleware('auth');





// use App\Http\Controllers\CoachDashboardController;

// Route::get('/coach-dashboard', [CoachDashboardController::class, 'store'])
//     ->middleware(['auth']) // Ensure only logged-in users can access it
//     ->name('coach.dashboard');


//     use App\Http\Controllers\ClientDashboardController;


// Route::post('/client-dashboard', [ClientDashboardController::class, 'store'])
//     ->middleware(['auth'])
//     ->name('client.form.dashboard');




// Route::get('/coach-dashboard/edit-plan/{id}', [CoachDashboardController::class, 'editPlan'])->name('coach.editPlan');
// Route::post('/coach-dashboard/edit-plan/{id}', [CoachDashboardController::class, 'updatePlan'])->name('coach.updatePlan');



// Route::middleware(['auth'])->group(function () {
//     Route::get('/coach.dashboard', [CoachDashboardController::class, 'index'])->name('coach.dashboard');
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
