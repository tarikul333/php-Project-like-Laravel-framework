<?php

namespace App\Controllers\Posts;

use App\Models\Post;
use Core\Validator;

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
        $validator = new Validator($_POST, [
            'user_name' => 'required',
            'title'     => 'required|max:100',
            'body'      => 'required|max:1000'
        ]);

        if ($validator->fails()) {
            return view('posts/create.view.php', [
                'errors' => $validator->errors(),
                'old' => $_POST
            ]);
        }

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
