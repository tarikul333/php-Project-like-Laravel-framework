<?php

namespace App\Controllers;

class AboutController
{
    public function index()
    {
        return view('about.view.php', [
            'title' => 'About'
        ]);
    }
}
