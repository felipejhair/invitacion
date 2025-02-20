<?php
use App\Http\Controllers\InvitacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(InvitacionController::class)->group(function () {
    Route::get('/cecy-y-felipe/{id}', 'show');
    Route::get('/cecy-y-felipe', 'error_invite');
});


Route::get('/crear-storage-link', function () {
    Artisan::call('storage:link');
    return "Storage link creado correctamente.";
});


Route::post('/saveConfirmation', [InvitacionController::class, 'saveConfirmation'])->name('saveConfirmation.dato');