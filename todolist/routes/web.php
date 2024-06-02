<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
<<<<<<< Updated upstream
/*
Route::get('/', function () {
    return view('task.index');
});
*/

Route::get('/', [TaskController::class,'index']);
Route::post('/', [TaskController::class,'store']);

=======

// Route::get('/', function () {
//     return view('task.index');
// });

Route::get('/', [TaskController::class,'index']);
Route::post('/', [TaskController::class,'store']);
Route::delete('/{id}', [TaskController::class,'destroy'])->name('task.destroy');
>>>>>>> Stashed changes
