<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email details
    $to = "info@theneedleads.com, faeem@theneedleads.com";
    $subject = "Hi New Enquiry on Digital Marketing Course | RedPrism";
    $email_body = "Name: $name\nEmail: $email\nPhone Number: $number\nMessage: $message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }

    // Create log entry
    $log_entry = date('Y-m-d H:i:s') . " | Name: $name | Email: $email | Phone Number: $number | Message: $message" . PHP_EOL;
    file_put_contents("form_log.txt", $log_entry, FILE_APPEND | LOCK_EX);

    // Redirect to a thank you page
    header("Location: thankyou.php");
    exit();
}
?>