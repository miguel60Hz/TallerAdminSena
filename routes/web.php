<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ApprenticeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'areas' => AreaController::class,
    'training-centers' => TrainingCenterController::class,
    'teachers' => TeacherController::class,
    'courses' => CourseController::class,
    'computers' => ComputerController::class,
    'apprentices' => ApprenticeController::class,
]);
