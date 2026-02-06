
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$Number = trim($_POST['phone'] ?? '');
$Message = trim($_POST['message'] ?? '');

$lettersOnly = preg_replace('/[^A-Za-z]/', '', $name);
$digits = preg_replace('/\D/', '', $Number);

function redirectWithError($code) {
    $ref = $_SERVER['HTTP_REFERER'] ?? 'index.php';
    $separator = (strpos($ref, '?') === false) ? '?' : '&';
    header('Location: ' . $ref . $separator . 'form_error=' . urlencode($code));
    exit;
}

if (strlen($lettersOnly) < 4) {
    redirectWithError('invalid_name');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectWithError('invalid_email');
}
if (strlen($digits) < 7 || strlen($digits) > 15) {
    redirectWithError('invalid_phone');
}

$to = "theneedleads@gmail.com,nehaneedleads23@gmail.com";
$cc = "drishtiarora460@gmail.com"; 
$subject = 'NeedleAds Technologies  (www.theneedleads.com) | New Inqury';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email . "\r\n";
$headers .= 'Cc: ' . $cc . "\r\n"; // Add the CC recipient here
$message = '<p>email:'. htmlspecialchars($email).'</p><p>number:'. htmlspecialchars($Number).'</p><p>name:'. htmlspecialchars($name).'</p><p>message:'. nl2br(htmlspecialchars($Message)).'</p><br>';
$result = @mail($to, $subject, $message, $headers);
// Always redirect to thank you page after submission attempt
header("Location: thankyou.php");
exit;
?>
