<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $company_name = htmlspecialchars($_POST['company_name']);
    $country = htmlspecialchars($_POST['country']);
    $message = htmlspecialchars($_POST['message']);
    
    // Get the referring page URL
    $page_name = htmlspecialchars($_SERVER['HTTP_REFERER']);

    // Email details
    $to = "info@theneedleads.com, theneedleads@gmail.com";
    $subject = "Hi New Enquiry on Needleads Technology";
    $email_body = "Page: $page_name\nName: $name\nEmail: $email\nPhone Number: $number\nCompany Name: $company_name\nCountry: $country\nMessage: $message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }

    // Create log entry
    $log_entry = date('Y-m-d H:i:s') . " | Page: $page_name | Name: $name | Email: $email | Phone Number: $number | Company_name: $company_name | Country: $country | Message: $message" . PHP_EOL;
    file_put_contents("vadodara_google_noida.txt", $log_entry, FILE_APPEND | LOCK_EX);

    // Redirect to a thank you page
    header("Location: thankyou.php");
    exit();
}
?>
