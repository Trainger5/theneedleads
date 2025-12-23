<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }


    // Prepare the email headers
    $to = "info@theneedleads.com, theneedleads@gmail.com"; // Replace with the recipient's email address
    $subject = "Hi! New Enquiry on The NeedleAds SEO Landing Page";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Create the full message
    $fullMessage = "Name: $name\nPhone Number: $number\nEmail: $email\n\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $fullMessage, $headers)) {
        header("Location: thankyou.php");
        exit;
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
