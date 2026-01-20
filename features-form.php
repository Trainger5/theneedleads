<?php
if(isset($_POST["SubmitBtn"])){

$to = "info@theneedleads.com,theneedleads@gmail.com,ashishsharmaa1014@gmail.com";
$subject = "Hi! New Enquiry on NeedleAds Features";
$name = trim($_POST["name"] ?? '');
$email = trim($_POST["email"] ?? '');
$number = trim($_POST["number"] ?? '');
$from = $email;
$website = trim($_POST["website"] ?? '');
$help = trim($_POST["help"] ?? '');

// Basic validation
$lettersOnly = preg_replace('/[^A-Za-z]/', '', $name);
$digits = preg_replace('/\D/', '', $number);

if (strlen($lettersOnly) < 4) {
    $errorCode = 'invalid_name';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorCode = 'invalid_email';
} elseif (strlen($digits) < 7 || strlen($digits) > 15) {
    $errorCode = 'invalid_phone';
} else {
    $errorCode = '';
}

if ($errorCode !== '') {
    $ref = $_SERVER['HTTP_REFERER'] ?? 'index.php';
    $separator = (strpos($ref, '?') === false) ? '?' : '&';
    header('Location: ' . $ref . $separator . 'form_error=' . urlencode($errorCode));
    exit;
}
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$name.'<'.$from.'>' . "\r\n";
$msg="<b>Name = </b>$name<br><b>Contact No = </b>$number<br><b>Email Id =</b> $email<br><b>Website = </b>$website<br><b>How Can Help You = </b>$help";

if(mail($to,$subject,$msg,$headers))
{
    header("Location:thankyou.php");
}else{
    echo "unable to send email";
}
}
?>
