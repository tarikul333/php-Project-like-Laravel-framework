<?php

namespace App\Controllers;

class ProjectController
{
    public function index()
    {
        return view('projects.view.php', [
            'title' => 'Projects'
        ]);
    }
}
