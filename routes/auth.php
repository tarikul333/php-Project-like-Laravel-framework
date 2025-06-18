<?php

use Core\Router;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;

Router::get('/register', [RegisterController::class, 'index'])->only('guest');
Router::post('/register', [RegisterController::class, 'store'])->only('guest');

Router::get('/login', [LoginController::class, 'index'])->only('guest');
Router::post('/login', [LoginController::class, 'authenticat'])->only('guest');

Router::get('/logout', [LoginController::class, 'logout'])->only('auth');

