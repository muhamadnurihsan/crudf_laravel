<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::controller(StudentsController::class)->prefix('students')->group(function() {
    Route::get('/', 'index')->name('students');
});

Route::post('store', [StudentsController::class, 'store']);
Route::get('/read', [StudentsController::class, 'read']);
Route::get('/showCreate', [StudentsController::class, 'showCreate']);
Route::get('/showEdit/{id}', [StudentsController::class, 'showEdit']);
Route::get('/update/{id}',[StudentsController::class,'update']);
Route::get('/deleteData/{id}',[StudentsController::class,'deleteData']);
Route::get('/toggleStatus',[StudentsController::class,'toggleStatus']);