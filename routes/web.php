<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/employees', function () {
    $employees = [
        ['id' => 1, 'name' => 'Ahmed', 'salary' => 9000],
        ['id' => 2, 'name' => 'Mohamed', 'salary' => 7000],
    ];
    return view('employees', compact('employees'));
    // return view('employees', ['employees' => $employees]);
});


// Route::get('/departments', [DepartmentController::class, 'index']);

// Route::get('/instructors',[InstructorController::class,'index']);
// Route::get('/instructors/create',[InstructorController::class,'create']);
// Route::post('/instructors', [InstructorController::class, 'store']);
// Route::get('/instructors/{id}', [InstructorController::class, 'show']);
// Route::get('/instructors/{id}/edit', [InstructorController::class, 'edit']);
// Route::put('/instructors/{id}', [InstructorController::class, 'update']);
// Route::delete('/instructors/{id}', [InstructorController::class, 'destroy']);
Route::resource('instructors', InstructorController::class);
