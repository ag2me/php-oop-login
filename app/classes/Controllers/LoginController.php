<?php

namespace App\Classes\Controllers;

require_once __DIR__ . '/../Models/User.php';

use App\Classes\Models\User;

class LoginController
{
    public function authenticate($username, $password)
    {
        // Instantiate the User model
        $user = new User();

        // Authenticate the user
        if ($user->authenticate($username, $password)) {
            // User is authenticated
            return true;
        }

        // Authentication failed
        return false;
    }
}
