<?php

namespace App\Controllers\Auth;

use App\Models\User;
use Core\Validator;

class RegisterController
{
    public function index()
    {
        return view('auth/register.view.php', [
            'title' => 'Register'
        ]);
    }

    public function store()
    {
        $validator = new Validator($_POST, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:100|confirmed',
            'password_confirmation' => 'required'
        ]);

        if ($validator->fails()) {
            return view('auth/register.view.php', [
                'errors' => $validator->errors(),
                'old' => $_POST
            ]);
        }

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user = new User();
        $user->create([
            'email' => $_POST['email'],
            'password' => $password
        ]);

        session_start();
        $_SESSION['success'] = "Registration successful! Please login.";

        header('Location: /register');
        exit;
    }
}
