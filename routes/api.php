<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidateController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegistrationController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/profile/all', [ProfileController::class, 'getAll']);
Route::get('/profile/{id}', [ProfileController::class, 'show']);
Route::put('/profile/{id}', [ProfileController::class, 'update']);
Route::get('/profile/user', [ProfileController::class, 'getCurrentUser']);

Route::prefix('candidate')->group(function(){
    Route::get('/',          [CandidateController::class, 'index']);
    Route::post('/',         [CandidateController::class, 'store']);
    Route::get('/{id}',      [CandidateController::class, 'show']);
    Route::post('/{id}',      [CandidateController::class, 'update']);
});
