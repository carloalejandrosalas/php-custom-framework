<?php

namespace App\Controllers;

use App\Core\App;

class UsersController 
{
    function index() 
    {
        $error = $_GET['error'];

        $users = App::get('database')->selectAll('user');
        
        return view('users', compact('users', 'error'));
    }

    function store()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $date_created = date('Y-m-d h:i:s');


        if (empty(trim($username)) || empty(trim($password)))
        {
            $error = "Username and Password are required";
            return redirect("users?error={$error}");
        }

        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'date_created' => $date_created
        ];

        $insert = App::get('database')->insert('user', $data);

        if ($insert) {
            return redirect("users");
        } else {
            $error = "Oops, something bad happend";
            return redirect("users?error={$error}");
        }
    }
}