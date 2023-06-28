<?php

namespace App\Classes\Models;

use PDO;

class User
{
    private $conn;

    public function __construct()
    {
        // Establish the database connection (using the configuration file)
        $dbConfig = include(__DIR__ . '/../../config/database.php');
        $this->conn = new PDO($dbConfig['dsn'], $dbConfig['username'], $dbConfig['password']);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function authenticate($username, $password)
    {
        // Prepare the SQL statement to select the user from the database
        $query = "SELECT id, password FROM users WHERE username = :username";

        // Prepare the statement
        $stmt = $this->conn->prepare($query);

        // Bind the parameters
        $stmt->bindParam(":username", $username);

        // Execute the statement
        $stmt->execute();

        // Fetch the row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the user exists and the password is correct
        if ($row && password_verify($password, $row['password'])) {
            // User is authenticated
            return true;
        }

        // Authentication failed
        return false;
    }
}
