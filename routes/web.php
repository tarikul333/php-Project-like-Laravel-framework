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

Router::get('/posts', [PostController::class, 'index']);
Router::get('/post/create', [PostController::class, 'create']);
Router::post('/post/store', [PostController::class, 'store']);

require "auth.php";