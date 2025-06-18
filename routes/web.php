<?php

use App\Controllers\AboutController;
use App\Controllers\ArticleController;
use App\Controllers\HomeController;
use App\Controllers\Posts\PostController;
use App\Controllers\ProjectController;
use Core\Router;


Router::get('/', [HomeController::class, 'index']);
Router::get('/about', [AboutController::class, 'index']);
Router::get('/articles', [ArticleController::class, 'index']);
Router::get('/projects', [ProjectController::class, 'index']);

Router::get('/posts', [PostController::class, 'index'])->only('auth');
Router::get('/post/create', [PostController::class, 'create'])->only('auth');
Router::post('/post/store', [PostController::class, 'store'])->only('auth');

require "auth.php";
