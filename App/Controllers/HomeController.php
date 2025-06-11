<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        return view('index.view.php', [
            'title' => 'Home'
        ]);
    }
}
