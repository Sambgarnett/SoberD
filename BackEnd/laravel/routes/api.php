<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Route;

Route::post('/login', [LoginController::class, 'submit']);