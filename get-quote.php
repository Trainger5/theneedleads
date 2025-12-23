<?php
$meta_title = "Get Quote - NeedleAds Technology";
$meta_description = "Get a quote from NeedleAds Technology for cutting-edge digital marketing solutions that elevate your online presence and drive success.";
$canonical_url = "https://www.theneedleads.com/get-quote.php";
?>
<?php include './include/header.php';?>

<?php
if(isset($_POST["SubmitBtn"])){

$to = "info@theneedleads.com,theneedleads@gmail.com";
$subject = "Hi! New Enquiry on NeedleAds India Get a Quote";
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

<section style="
    background: url(./assets/img/get-a-quote-bnr.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="outerofbanner">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="bannercontent">
                        <h1>Get a Quote</h1>
                        <p>Get a Quote: Your Pathway to Digital Marketing Solution with NeedleAds Technology!</p>
                        <div class="webbtn">
                            <a href="tel:+91-8750500075"><i class="fa fa-phone"></i> Have a Project to Discuss?</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sectionpadding">
    <div class="outerofperpsalsection">
        <div class="container">
            <div class="contactformset contactpageform">
                <div class="sectionheading">
                    <h2>Let’s Discuss Your Project</h2>
                </div>
                <form action="" method="POST" id="emailForm">
                    <div class="mb-3">
                        <i class="fa fa-user" aria-hidden="true"></i> <input type="text" placeholder="Name"
                            class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <i class="fa fa-phone" aria-hidden="true"></i> <input type="tel" placeholder="Phone Number"
                            class="form-control" id="number" name="number" required>
                    </div>
                    <div class="mb-3">
                        <i class="fa fa-envelope" aria-hidden="true"></i> <input type="email" placeholder="Email Id"
                            class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <i class="fa fa-globe" aria-hidden="true"></i> <input type="text" placeholder="Website Address"
                            class="form-control" id="website" name="website" required>
                    </div>
                    <div class="mb-3">
                        <i class="fa fa-question" aria-hidden="true"></i> <textarea class="form-control" name="help"
                            id="help" placeholder="How Can Help You?"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Submit" class="SubmitBtn" id="SubmitBtn" name="SubmitBtn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php';?>