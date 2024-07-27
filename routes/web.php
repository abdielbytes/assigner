<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;
use App\Jobs\SendGeneralEmailJob; // Import the job class
use App\Jobs\SendEmailJob;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AssignmentController::class, 'index'])->name('dashboard');
});


Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignments.index');
Route::post('/assignments', [AssignmentController::class, 'store'])->name('assignments.store');
Route::post('/assignments/{id}/print', [AssignmentController::class, 'print'])->name('assignments.print');
Route::get('/generate-pdf', [AssignmentController::class, 'generatePdf'])->name('generate.pdf');
