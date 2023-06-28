<?php
session_start();
$config = require_once __DIR__ . '/../../app/config/config.php';

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page or perform other actions
    header("Refresh: 1; url=" . $config['base_url'] . "/app/views/login.php");
    echo "Redirecting to login page...";
    exit();    
}

// Logout functionality
if (isset($_POST['logout'])) {
    // Clear the session data
    session_unset();
    session_destroy();
    
    header("Refresh: 1; url=" . $config['base_url']);
    echo "Logging out...";
    exit();    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $config['base_url']; ?>/public/css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to the Dashboard</h1>
    </header>

    <main>
        <!-- Main content here -->
        <h2>Hello, <?php echo $_SESSION['username']; ?></h2>
        <p>This is your dashboard. Customize it according to your needs.</p>

        <!-- Logout button -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="logout" value="Logout">
        </form>
    </main>

</body>
</html>
