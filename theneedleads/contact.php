<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get data from form 
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $website = isset($_POST['website']) ? $_POST['website'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email address
        echo "Invalid email address";
        exit;
    }

    // Set recipient email address
    $to = "theneedleads@gmail.com";
    $subject = "Google Ads Page  Submission: " . $subject;

    // Construct email message
    $txt = "Name: $name $lname\r\nEmail: $email\r\nPhone: $phone\r\nWebsite: $website\r\nMessage: $message";

    // Set additional headers
    $headers = "From: admin@bpadsoftware.com" . "\r\n" .
        "CC: nehaneedleads23@gmail.com";

    // Send email
    if (mail($to, $subject, $txt, $headers)) {
        // Redirect to thank you page
        header("Location: https://theneedleads.com/thankyou.html");
        exit;
    } else {
        // Handle email sending error
        echo "Error sending email";
    }

} else {
    // Handle non-POST requests if needed
    echo "Invalid request method";
}
?>


// // <?php

//  // $name = $_POST['name'];-->
//  // $email = $_POST['email'];-->
//  // $phone = $_POST['phone'];-->
//  // $website = $_POST['website'];-->

//  // use PHPMailer\PHPMailer\PHPMailer;-->
//  // use PHPMailer\PHPMailer\SMTP;-->
//  // use PHPMailer\PHPMailer\Exception;-->

 
//  // require 'PHPMailer/src/Exception.php';-->
//  //  require 'PHPMailer/src/PHPMailer.php';-->
//  //  require 'PHPMailer/src/SMTP.php';-->
 
//  //  $mail = new PHPMailer(true);-->

// <!--try {-->
//     //Server settings
     
//     $mail->Host       = 'smtp.@gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'drishtiarora460@gmail.com';                     //SMTP username
//     $mail->Password   = 'cxzhzaexmzxqdnwe';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
// <!--    $mail->setFrom('from@example.com', 'Mail');-->
//     $mail->addAddress('theneedleads@gmail.com');     //Add a recipient
   

// <!--   $message = "Name" . $name . "/n" . "Email" . $email . "/n" . "Phone" . $phone. "/n" . "Website" . $website;-->

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
// <!--    $mail->Subject = 'Here is the subject';-->
// <!--    $mail->Body    = $message;-->
// <!--    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';-->

// <!--    $mail->send();-->
// <!--    echo 'Your Mail has been sent';-->
// <!--} catch (Exception $e) {-->
// <!--    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";-->
// <!--}-->

// <!--?>-->