<?php

// Session Management
session_start();

// Set session timeout
$timeout_duration = 1800; // 30 minutes

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();     // unset $_SESSION variables
    session_destroy();   // destroy session data
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time

// Utility Functions
function redirect($url) {
    header('Location: '.$url);
    exit();
}

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
