<?php

// Set session variables (these would typically be set after user login)
if (!isset($_SESSION['id']) || !isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    // For demonstration purposes, set some default values
    $_SESSION['id'] = 1;
    $_SESSION['name'] = 'John Doe';
    $_SESSION['email'] = 'john.doe@example.com';
}


