<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Replace this with your actual user retrieval logic, typically from a database
    $storedUsers = [
        [
            'email' => 'admin@example.com',
            'password' => '$2y$10$Wfpv0XWfwA3T83NGO7eevuUQ7/WWJjcbEC6/s3W58lb6T3c9Gekwm', // Hashed password
            'role' => 'admin',
        ],
        [
            'email' => 'manager@example.com',
            'password' => '$2y$10$SomeOtherHashedPassword', // Hashed password
            'role' => 'manager',
        ],
        // Add more users and their roles here
    ];

    // Check if the submitted email and password match any user's credentials
    foreach ($storedUsers as $user) {
        if ($email === $user['email'] && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;

            // Redirect users based on their roles
            if ($user['role'] === 'admin') {
                header('Location: admin_dashboard.php');
            } elseif ($user['role'] === 'manager') {
                header('Location: manager_dashboard.php');
            } else {
                header('Location: user_dashboard.php');
            }
            exit; // Ensure the script stops here
        }
    }

    // If no matching user is found, display an error message
    echo "Invalid credentials. Please try again.";
}
?>
