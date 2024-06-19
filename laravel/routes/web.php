<?php
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', [TestController::class,'show']);
Route::get('/students', [StudentController::class,'index']);
Route::get('/students/create', [StudentController::class,'showcreateform']);
Route::post('/student/store', [StudentController::class,'createStudent']);
Route::delete('/delete-student/{student}', [StudentController::class, 'deleteStudent']);
Route::get('/edit-student-form/{student}', [StudentController::class, 'showEditStudent']);
Route::put('/edit-student/{student}', [StudentController::class, 'editStudent']);