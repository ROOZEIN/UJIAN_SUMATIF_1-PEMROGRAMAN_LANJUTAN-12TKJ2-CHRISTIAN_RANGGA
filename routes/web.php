<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::name('students.')->prefix('students')->group(function() {
//     Route::get('/', [StudentController::class, 'index'])->name('index');
// }); 

Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/students/{studentId}', [App\Http\Controllers\StudentController::class, 'show']);