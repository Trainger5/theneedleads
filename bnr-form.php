<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Initialize an empty error message
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form  
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $number = trim($_POST['number'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate name (at least 4 letters)
    $lettersOnly = preg_replace('/[^A-Za-z]/', '', $name);
    if (strlen($lettersOnly) < 4) {
        $errorMessage = "Invalid name";
    }

    // Validate email
    if (empty($errorMessage) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Invalid email format";
    }

    // Validate phone (7-15 digits)
    $digits = preg_replace('/\D/', '', $number);
    if (empty($errorMessage) && (strlen($digits) < 7 || strlen($digits) > 15)) {
        $errorMessage = "Invalid phone number";
    }

    // If there's no error, proceed with sending the email
    if (empty($errorMessage)) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'theneedleads@gmail.com'; // SMTP username
            $mail->Password = 'bqkhuhvbgoxuiwes'; // SMTP app-specific password 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('theneedleads@gmail.com', 'Needleads');
            $mail->addAddress('theneedleads@gmail.com');
            $mail->addCC('needleadsagency@gmail.com');

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Hi New Enquiry on Homepage Banner Form | Needleads India';
            $mail->Body = "Name: $name<br>Email: $email<br>Phone Number: $number<br>Services: $service<br>Message: $message";
            $mail->AltBody = "Name: $name\nEmail: $email\nPhone Number: $number\nServices: $service\nMessage: $message";

            // Send the email
            $mail->send();
            // echo 'Email has been sent'; // Removed to prevent JSON corruption

            // Log data to a log file
            $logFile = 'form-submissions.log';
            $logData = date("Y-m-d H:i:s") . " | Name: $name, Email: $email, Phone Number: $number, Service: $service, Message: $message" . PHP_EOL;
            file_put_contents($logFile, $logData, FILE_APPEND);

            // If AJAX request, return JSON
            if (isset($_POST['ajax']) && $_POST['ajax'] === '1') {
                // Disable error reporting for cleaner JSON
                error_reporting(0);
                ini_set('display_errors', 0);
                
                // Clear any previous output
                if (ob_get_length()) ob_clean();
                
                header('Content-Type: application/json');
                echo json_encode(['status' => 'success', 'message' => 'Email has been sent']);
                exit();
            }

            // Redirect to thankyou.php after form submission
            header("Location: thankyou.php");
            exit();

        } catch (Exception $e) {
            if (isset($_POST['ajax']) && $_POST['ajax'] === '1') {
                header('Content-Type: application/json');
                http_response_code(500);
                echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
                exit();
            }
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>
