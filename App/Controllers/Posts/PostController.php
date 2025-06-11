<?php

namespace App\Controllers\Posts;

use App\Models\Post;

class PostController
{
    public function index()
    {
        $postModel = new Post();
        $posts = $postModel->all();

        return view('posts/index.view.php', [
            'title' => 'Post',
            'posts' => $posts
        ]);
    }
    public function create()
    {
        require basePath('views/posts/create.view.php');
    }

    public function store()
    {
        $post = new Post();
        $post->create([
            'user_name' => $_POST['user_name'],
            'title' => $_POST['title'],
            'body' => $_POST['body']
        ]);

        header('Location: /posts');
        exit;
    }
}
