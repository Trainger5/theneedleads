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
    background: url(assets/img/seo-bnr.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="outerofbanner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="bannercontent">
                        <h1>Free SEO Analysis</h1>
                        <p>Get a free SEO analysis for your website and uncover opportunities to improve your search
                            engine rankings and drive more traffic.</p>
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
                            <img src="assets/img/peroposal.jpg" alt="free SEO analysis">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="aboutcontent">
                        <p>
                            <b>Website Audit:</b> Our free SEO analysis thoroughly evaluates your website's current
                            performance. We assess various aspects, including on-page SEO, off-page SEO, technical SEO,
                            and content quality.
                        </p>
                        <p><b>Keyword Analysis:</b> Gain insights into the performance of your current keywords and
                            discover new keyword opportunities to enhance your search engine rankings.</p>
                        <p><b>Competitor Analysis:</b> In addition to evaluating your website, our free SEO analysis
                            also includes a competitor analysis. We assess your competitors' websites to identify their
                            strengths and weaknesses, helping you gain valuable insights into their SEO strategies.</p>
                        <p class="mb-0"><b>Transparent Reporting:</b> Transparency is critical to our free SEO analysis
                            process. We provide you with detailed reports that outline our findings and recommendations
                            in a clear and easy-to-understand manner.</p>
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
                    <h2>Get Your Free SEO Analysis Report</h2>
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