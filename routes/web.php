<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentController::class,'showStudents']);
Route::post('/add',[StudentController::class,'addStudent'])->name('addStudent');
Route::post('/update/{id}',[StudentController::class,'updateStudent'])->name('update.student');
Route::get('/updatepage/{id}',[StudentController::class,'updatepage'])->name('update.page');
Route::get('/delete/{id}',[StudentController::class,'deleteStudent'])->name('delete.student');
Route::get('/student/{id}',[StudentController::class,'showStudent'])->name('view.student');

Route::view('newStudent','/addStudent');