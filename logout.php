<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['login'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login or home page after logout
    header("Location: ./index.php"); // Replace 'login.php' with the appropriate login page URL
    exit();
} else {
    // Redirect to the login or home page if the user is not logged in
    header("Location: ./index.php"); // Replace 'login.php' with the appropriate login page URL
    exit();
}
