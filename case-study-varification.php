<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    // $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    
    // Email details
    $to = "faeem@theneedleads.com"; // Replace with your email address
    $subject = "Hi! New Enquiry on Case Study Varification";
    $email_body = "Email: $email\nPhone Number: $number";
    $headers = "From: info@theneedleads.com"; // Replace with a valid email from your domain

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        // Log entry
        $log_entry = date('Y-m-d H:i:s') . " | Email: $email | Phone Number: $number" . PHP_EOL;
        file_put_contents("brochure-logs.txt", $log_entry, FILE_APPEND | LOCK_EX);

        // Set session variable to allow access to case-study.php
        $_SESSION['form_submitted'] = true;

        // Redirect to the thank you page
        header("Location: case-study.php?pdf=true");
        exit();
    } else {
        echo "Failed to send mail.";
    }
} else {
    echo "Invalid request method.";
}
?>
