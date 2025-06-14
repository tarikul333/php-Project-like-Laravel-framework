<?php

use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use Core\Router;

Router::get('/register', [RegisterController::class, 'index']);
Router::post('/register', [RegisterController::class, 'store']);

Router::get('/login', [LoginController::class, 'index']);
Router::post('/login', [LoginController::class, 'authenticat']);

Router::get('/logout', [LoginController::class, 'logout']);

