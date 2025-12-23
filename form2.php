<?php
// form1.php - Form processing file
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['banner_form_submitted'])) {
    
    // Sanitize and get data from form  
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $website = trim($_POST['website'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errorMessage = "";

    // Basic validation
    if (empty($name)) {
        $errorMessage .= "Name is required. ";
    }
    
    if (empty($email)) {
        $errorMessage .= "Email is required. ";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= "Invalid email format. ";
    }
    
    if (empty($phone)) {
        $errorMessage .= "Phone is required. ";
    } elseif (!preg_match('/^[0-9]{10,15}$/', $phone)) {
        $errorMessage .= "Invalid phone number format. ";
    }
    
    if (empty($message)) {
        $errorMessage .= "Message is required. ";
    }

    // If validation fails, redirect back with error
    if (!empty($errorMessage)) {
        // Store error in session and redirect back
        session_start();
        $_SESSION['form_error'] = $errorMessage;
        $_SESSION['form_data'] = $_POST;
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    // If validation passes, send email
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'needleadsagency@gmail.com'; 
        $mail->Password = 'ceovzkarzpcbguys';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('needleadsagency@gmail.com', 'Needleads Contact Form');
        $mail->addAddress('needleadstechnologies@gmail.com'); 
        $mail->addCC('theneedleads@gmail.com'); 
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry from Google Ads | Needleads India';
        
        $mail->Body = "
        <h3>New Contact Form Submission</h3>
        <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
        <p><strong>Website:</strong> " . htmlspecialchars($website) . "</p>
        <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
        <p><small>Submitted on: " . date('Y-m-d H:i:s') . "</small></p>
        ";
        
        $mail->AltBody = "New Contact Form Submission\n\nName: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message\n\nSubmitted on: " . date('Y-m-d H:i:s');

        // Send the email
        if ($mail->send()) {
            // Log successful submission
            $logFile = 'form-submissions.log';
            $logData = date("Y-m-d H:i:s") . " | SUCCESS | Name: $name, Email: $email, Phone: $phone" . PHP_EOL;
            file_put_contents($logFile, $logData, FILE_APPEND | LOCK_EX);

            // Clear any session data
            session_start();
            unset($_SESSION['form_error']);
            unset($_SESSION['form_data']);

            // Redirect to thank you page
            header("Location: thankyou.php");
            exit();
        }

    } catch (Exception $e) {
        // Log the error
        error_log("Contact form error: " . $e->getMessage());
        
        // Store error in session and redirect back
        session_start();
        $_SESSION['form_error'] = "Message could not be sent. Please try again later.";
        $_SESSION['form_data'] = $_POST;
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

} else {
    // If accessed directly without POST, redirect to form
    header("Location: contact.php"); // Replace with your form page
    exit();
}
?>