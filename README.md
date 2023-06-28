
# Login System with OOP Approach

This code is a login system implemented using PHP version 8 and an XAMPP environment. It allows users to log in securely.

## Prerequisites

-   XAMPP: Ensure that you have the latest version of XAMPP installed on your system. XAMPP provides a local development environment for running PHP scripts.
-   PHP 8: Make sure you have PHP 8 installed on your system. This code was developed and tested with PHP version 8.

## Setup Instructions

1.  Clone the repository to your local machine or download the source code as a ZIP file.
    
2.  Place the code in the appropriate directory of your XAMPP installation. In XAMPP, the default directory for web files is `htdocs` located in the XAMPP installation directory.
    
3.  Import the SQL dump into a MySQL database. The SQL dump file (`database.sql`) is included in the repository. You can import it using a tool like phpMyAdmin or the MySQL command line interface. The database dump contains the necessary table structure and sample user data for testing.
    
4.  Modify the database configuration. Open the `database.php` file and update the following lines with your MySQL database credentials:
    
    phpCopy code
    
```json
return [
    'dsn' => 'mysql:host=localhost;dbname=oop_login',
    'username' => 'ag2me',
    'password' => '0000'
]
```
    
5.  Start the Apache and MySQL services in XAMPP.
    
6.  Open a web browser and navigate to `http://localhost/login-system` (assuming you placed the code in a directory named `login-system` in your XAMPP `htdocs` folder).
    
7.  Explore the functionality of the login system and experiment with logging in using different credentials.
    

## Code Structure

The code follows an Object-Oriented Programming (OOP) approach to achieve modularity and maintainability. The main files and directories in the project are as follows:

-   `index.php`: The entry point of the application that displays the login form and handles form submissions.
-   `classes/`: This directory contains PHP class files that implement various functionalities of the login system, such as user authentication and database operations.
-   `config.php`: The configuration file where you define your database credentials and other constants.
-   `database.sql`: The SQL dump file containing the table structure and sample user data for the login system.

Feel free to explore the code and modify it to suit your requirements.

## Troubleshooting

If you encounter any issues or errors while setting up or running the code, consider the following steps:

-   Verify that XAMPP and PHP 8 are properly installed and configured.
-   Double-check your database credentials in the `config.php` file.
-   Ensure that the MySQL service is running in XAMPP.
-   Make sure the necessary PHP extensions for MySQL are enabled in your `php.ini` file.

If the issue persists, feel free to seek support or open an issue in the repository.

## License

This code is released under the [MIT License](https://opensource.org/licenses/MIT). You are free to use, modify, and distribute the code as per the terms of the license.

## Acknowledgments

-   The login system code was developed as a demonstration and learning exercise.
-   Thanks to the developers and contributors of XAMPP, PHP, and MySQL for providing the necessary tools and technologies for web development.
