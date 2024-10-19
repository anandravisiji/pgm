<?php

function isValidEmail($email) {
    // Define the pattern for a valid email address
    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    // Use preg_match to check if the email matches the pattern
    if (preg_match($pattern, $email)) {
        return true; // Valid email address
    } else {
        return false; // Invalid email address
    }
}

// Example usage
$emailToTest = "example.3@example.com";

if (isValidEmail($emailToTest)) {
    echo "$emailToTest is a valid email address.";
} else {
    echo "$emailToTest is not a valid email address.";
}

?>
