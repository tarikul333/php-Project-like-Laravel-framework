<?php

namespace App\Controllers;

class ArticleController
{
    public function index()
    {
        return view('articles.view.php', [
            'title' => 'Articales'
        ]);
    }
}