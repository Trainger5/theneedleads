<?php
if(isset($_POST['SubmitBtn'])){
    $to = "needleadsagency@gmail.com";
    $subject = "New Contact Form Submission";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $website = $_POST['Website'];
    $message = $_POST['message'];

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $number\n";
    $body .= "Website: $website\n";
    $body .= "Message: $message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)){
        // Redirect to thank you page
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Email sending failed. Please try again.";
    }
}
?>
