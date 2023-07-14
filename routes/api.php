<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LoginApiController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('category', CategoryController::class);
Route::apiResource('course', CourseController::class);
<<<<<<< HEAD

=======
*/
###################################################################################
#                             APIs CON TOKEN
###################################################################################
Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('course', CourseController::class);
    Route::apiResource('exam', ExamController::class);
    Route::apiResource('question', QuestionController::class);
    Route::apiResource('student', StudentController::class);   
});

Route::post('/login', [LoginApiController::class, 'login']);
