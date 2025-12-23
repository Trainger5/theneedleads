<?php
if(isset($_POST["SubmitBtn"])){

$to = "info@theneedleads.com,theneedleads@gmail.com,ashishsharmaa1014@gmail.com";
$subject = "Hi! New Enquiry on NeedleAds Features";
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$from=$_POST["email"];
$website=$_POST["website"];
$help=$_POST["help"];
$ms1=$message;
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