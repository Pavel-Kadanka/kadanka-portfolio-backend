<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;

Route::resource('skills', SkillController::class);
Route::resource('projects', ProjectController::class);
