<?php

namespace App\Controllers\Auth;

use App\Models\User;
use Core\Validator;

class LoginController
{
    public function index()
    {
        return view('auth/login.view.php', [
            'title' => 'Login'
        ]);
    }

    public function authenticat()
    {
        $validator = new Validator($_POST, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return view('auth/login.view.php', [
                'errors' => $validator->errors(),
                'old' => $_POST
            ]);
        }

        $user = new User();
        $user = $user->findByEmail($_POST['email']);

        if (!$user || !password_verify($_POST['password'], $user['password'])) {
            return view('auth/login.view.php', [
                'errors' => ['email' => 'Invalid email or password.'],
                'old' => $_POST
            ]);
        }

        session_start();
        $_SESSION['user'] = [
            'email' => $user['email'],
        ];

        header('Location: /');
        exit;
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('Location: /');
        exit;
    }
}
