<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\WorkHoursController;
use App\Http\Controllers\CommentsController;

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

Route::get('/work-hours/create', [WorkHoursController::class, 'create'])->name('work_hours.create');
Route::post('/work-hours', [WorkHoursController::class, 'store'])->name('work_hours.store');
Route::get('/work-hours/history', [WorkHoursController::class, 'history'])->name('work_hours.history');

Route::get('/comments/create', [CommentsController::class, 'create'])->name('comments.create');
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
