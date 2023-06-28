<?php
use App\Classes\Controllers\LoginController;

require_once __DIR__ . '/../../app/classes/Controllers/LoginController.php';
require_once __DIR__ . '/../../app/config/database.php';

$config = require_once __DIR__ . '/../../app/config/config.php';

// Get the submitted username and password
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Instantiate the LoginController class
$loginController = new LoginController();

// Authenticate the user
if ($loginController->authenticate($username, $password)) {
    // User is authenticated, perform necessary actions (e.g., set session variables, redirect)
    session_start();
    $_SESSION['username'] = $username;
    // header("Location: " . $config['base_url'] . "/app/views/dashboard.php");
    // exit();
    header("Refresh: 1; url=" . $config['base_url'] . "/app/views/dashboard.php");
    echo "Redirecting to dashboard page...";
    exit();    
} else {
    // Authentication failed, display an error message or redirect to an error page
    header("Refresh: 1; url=" . $config['base_url']);
    echo "Invalid username or password...";
}
