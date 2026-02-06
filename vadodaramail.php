<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $number = trim($_POST['number'] ?? '');
    $company_name = trim($_POST['company_name'] ?? '');
    $country = trim($_POST['country'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate name, email, phone
    $lettersOnly = preg_replace('/[^A-Za-z]/', '', $name);
    $digits = preg_replace('/\D/', '', $number);

    $errorCode = '';
    if (strlen($lettersOnly) < 4) {
        $errorCode = 'invalid_name';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorCode = 'invalid_email';
    } elseif (strlen($digits) < 7 || strlen($digits) > 15) {
        $errorCode = 'invalid_phone';
    }

    if ($errorCode !== '') {
        $ref = $_SERVER['HTTP_REFERER'] ?? 'index.php';
        $separator = (strpos($ref, '?') === false) ? '?' : '&';
        header('Location: ' . $ref . $separator . 'form_error=' . urlencode($errorCode));
        exit;
    }
    
    // Get the referring page URL
    $page_name = htmlspecialchars($_SERVER['HTTP_REFERER']);

    // Email details
    $to = "info@theneedleads.com, theneedleads@gmail.com";
    $subject = "Hi New Enquiry on Needleads Technology";
    $email_body = "Page: $page_name\nName: " . htmlspecialchars($name) . "\nEmail: " . htmlspecialchars($email) . "\nPhone Number: " . htmlspecialchars($number) . "\nCompany Name: " . htmlspecialchars($company_name) . "\nCountry: " . htmlspecialchars($country) . "\nMessage: " . htmlspecialchars($message);
    $headers = "From: $email";
    
    // Send email
    mail($to, $subject, $email_body, $headers);

    // Create log entry
    $log_entry = date('Y-m-d H:i:s') . " | Page: $page_name | Name: $name | Email: $email | Phone Number: $number | Company_name: $company_name | Country: $country | Message: $message" . PHP_EOL;
    file_put_contents("vadodara_google_noida.txt", $log_entry, FILE_APPEND | LOCK_EX);

    // Redirect to a thank you page
    header("Location: thankyou.php");
    exit();
}
?>
