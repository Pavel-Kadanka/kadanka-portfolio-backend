<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::prefix('content')->group(function () {
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::post('/projects', [ProjectController::class, 'store']);
    Route::get('/projects/{id}', [ProjectController::class, 'show']);
    Route::put('/projects/{id}', [ProjectController::class, 'update']);
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);
});
Route::prefix('content')->group(function () {
    Route::get('/skills', [SkillController::class, 'index']);
    Route::post('/skills', [SkillController::class, 'store']);
    Route::get('/skills/{id}', [SkillController::class, 'show']);
    Route::put('/skills/{id}', [SkillController::class, 'update']);
    Route::delete('/skills/{id}', [SkillController::class, 'destroy']);
});