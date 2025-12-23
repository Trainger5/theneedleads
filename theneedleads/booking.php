<?php
$meta_title = "Get a Free SEO Analysis for Your Website | Improve Rankings";
$meta_description = "Sign up for a free SEO analysis to uncover opportunities for improving your website's search engine rankings and driving more traffic.";
$canonical_url = "https://www.theneedleads.com/free-seo-analysis.php";
?>
<?php include './include/header.php';?>


<?php
if(isset($_POST["SubmitBtn"])){

$to = "info@theneedleads.com,theneedleads@gmail.com";
$subject = "Hi! New Enquiry on NeedleAds India Free SEO Analysis";
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

<section class="bannersectionstr" style="
    background: url(assets/img/booking-bnr.png);
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="outerofbanner">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                    <div class="bannercontent">
                        <h1>Book Your Digital Marketing Consultation Today!</h1>
                        <p>Ready to take your business to the next level? Let our expert digital marketing team help you
                            achieve your goals! Whether you're looking to boost your online presence, increase traffic,
                            or drive more conversions, we’ve got you covered.</p>
                        <div class="webbtn">
                            <a href="tel:+91-8750500075"><i class="fa fa-phone"></i> Have a Project to Discuss?</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about us start -->
<section class="sectionpadding">
    <div class="outerofaboutsection">
        <div class="container">
            <div class="row alignset align-items-center row-gap-4">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="aboutsidimgwithform">
                        <div class="aboutimg">
                            <img src="assets/img/digital-book.png" alt="Booking Services">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="aboutcontent">

                        <p>
                            <b>Free Initial Consultation :</b> Speak to our marketing strategists to assess your current
                            digital strategy.
                        </p>
                        <p><b>Personalized Marketing Plan :</b> Get a custom-tailored strategy designed to help your
                            business succeed online.</p>
                        <p><b>Performance Review :</b> Evaluate and adjust your campaign with real-time performance data
                            and insights.</p>
                        <p class="mb-0"><b>Expert Consultation :</b> Have access to one-on-one guidance from our digital
                            marketing experts. We’re here to answer your questions, provide advice, and help you
                            understand every aspect of your marketing efforts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us end -->

<section class="sectionpadding bgsection">
    <div class="outerofperpsalsection">
        <div class="container">
            <div class="contactformset contactpageform">
                <div class="sectionheading">
                    <h2>Book your consultation now!</h2>
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

<?php include './include/footer.php';?>