
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['username'];
$email = $_POST['email'];
$Number = $_POST['phone'];
$Message = $_POST['message'];

$to = "theneedleads@gmail.com,nehaneedleads23@gmail.com";
$cc = "drishtiarora460@gmail.com"; 
$subject = 'NeedleAds Technologies  (www.theneedleads.com) | New Inqury';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email . "\r\n";
$headers .= 'Cc: ' . $cc . "\r\n"; // Add the CC recipient here
$message = '<p>email:'. $email.'</p><p>number:'. $Number.'</p><p>name:'. $name.'</p><p>message:'. $Message.'</p><br>';
$result = @mail($to, $subject, $message, $headers);
if ($result) {
    echo '<script>alert("Mail sent successfully !")</script>';
} else {
    echo '<script>alert("Error: Unable to send mail.")</script>';
}
echo '<script>window.location.href="index.php";</script>';
?>