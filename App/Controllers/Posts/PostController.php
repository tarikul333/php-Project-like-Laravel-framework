<?php

namespace App\Controllers\Posts;

use App\Models\Post;
use Core\Validator;

class PostController
{
    public function index()
    {
        $post = new Post();
        $posts = $post->with('user');

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
            'title'     => 'required|max:100',
            'body'      => 'required|max:1000'
        ]);

        if ($validator->fails()) {
            return view('posts/create.view.php', [
                'errors' => $validator->errors(),
                'old' => $_POST
            ]);
        }

        session_start();

        if (!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])) {
            $_SESSION['error'] = 'You must be logged in to create a post.';
            header('Location: /login');
            exit;
        }

        $user_id = $_SESSION['user']['id'];

        $post = new Post();
        $post->create([
            'user_id' => $user_id,
            'title'   => $_POST['title'],
            'body'    => $_POST['body']
        ]);

        $_SESSION['success'] = 'Post created successfully!';
        header('Location: /posts');
        exit;
    }
}
