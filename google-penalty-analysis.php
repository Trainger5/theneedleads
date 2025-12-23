<?php
if(isset($_POST["SubmitBtn"])){

$to = "info@theneedleads.com,theneedleads@gmail.com";
$subject = "Hi! New Enquiry on NeedleAds India Google Penalty Analysis";
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$from=$_POST["email"];
$website=$_POST["website"];
$help=$_POST["help"];
$ms1=$message;
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
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

<?php
$meta_title = "Free Google Penalty Analysis - Improve Search Rankings";
$meta_description = "Receive a complimentary Google penalty analysis to detect and address issues affecting your website's search engine rankings.";
$canonical_url = "https://www.theneedleads.com/google-penalty-analysis.php";
?>
<?php include './include/header.php';?>

<section class="bannersectionstr" style="
    background: url(assets/img/google-ads.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="outerofbanner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="bannercontent">
                        <h1>Free Google Penalty Analysis</h1>
                        <p>Get a Free Google Penalty Analysis: Identify, Recover, and Prevent Penalties for Your
                            Website's SEO Success!</p>
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
                            <img src="assets/img/google.jpg" alt="Google Penalty Analysis">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="aboutcontent">
                        <div class="sectionheading">
                            <h2>Which Google Penalty has Affected Your Website?</h2>
                        </div>
                        <p><b>Identifying Penalties:</b> Identify if your site is affected by a Google penalty and
                            understand its nature.</p>
                        <p><b>Assessing Impact:</b> Evaluate how the penalty affects your site's search rankings and
                            organic traffic.</p>
                        <p><b>Recovery Methods:</b> Learn how to recover from the penalty and enhance your site's SEO
                            performance.</p>
                        <p class="mb-0"><b>Preventing Penalties:</b> Explore strategies to prevent future Google
                            penalties and uphold a strong presence in search results.</p>
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
                    <h2>Free Google Penalty Analysis</h2>
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