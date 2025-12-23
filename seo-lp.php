<?php
$meta_title = "SEO Company";
$meta_description = "Boost your online presence with NeedleAds Technology, a leading SEO Company in Delhi NCR, Delhi. Drive Web traffic and grow your business. Contact us now!";
$canonical_url = "https://www.theneedleads.com/seo-lp.php";
?>
<?php include './include/header.php';?>

<style>
/* Popup container */
.popup {
    display: none;
    /* Hidden by default */
    position: fixed;
    z-index: 9;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
    padding-top: 60px;
}

/* Popup Content */
.popup-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
}

/* Close button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.calltobtn {
    display: flex;
    gap: 10px;
}

.calltobtn a {
    /* display: inline-block; */
    width: 18%;
}

.calltobtn a img {
    /* width: 60px; */
}

.popup-content {
    width: 50% !important;
    max-width: inherit;
    padding: 0;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
}

.popup-content {}

.popup-content .bnrform {
    /* background: #f7f7f7 !important; */
}

.popup-content .bnrform form#emailForm {
    background: #e7e7e7;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.offercontent {
    padding: 70px 20px;
}

.offerbgset {
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
    padding-right: 0;
}

.offercontent h4 {
    color: #fff;
}

.offercontent h2 {
    color: #fff;
    font-size: 39px;
}

.offercontent p {
    color: #fff;
}

.offercontent h2 b {
    display: block;
    font-size: 60px;
    color: #f85a03;
}

.pfsl {
    padding-left: 0;
}

.popup-content span.close {
    position: absolute;
    top: 0px;
    right: 10px;
    z-index: 9;
}


@media only screen and (max-width: 1263px) {
    .popup-content {
        width: 70% !important;
    }
}

@media only screen and (max-width: 768px) {
    .popup-content {
        width: 90% !important;
    }
}

@media only screen and (max-width: 425px) {
    .offermap .bnrform {
        width: 100%;
        padding-left: 10px;
    }

    .calltobtn {
        display: none;
    }

    .offercontent {
        padding: 30px 20px;
    }

    .offercontent h4 {
        font-size: 18px;
        font-weight: 400;
    }

    .offercontent h2 {
        font-size: 24px;
    }

    .offercontent h2 b {
        font-size: 38px;
    }

    .fixm {
        display: inline-block;
    }

    .offercontent h2 b {
        display: inline-block;
    }

    .mblockfix {
        display: block;
    }

    .offercontent p {
        margin: 0;
    }

    .bnrform form .mb-3 {
        margin-bottom: 5px !important;
    }

    .bnrform form .mb-3 textarea.form-control {
        height: 100px;
    }


}
</style>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16654063019"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'AW-16654063019');
</script>


<script>
gtag('config', 'AW-16654063019/xVseCK_K7sUZEKuro4U-', {
    'phone_conversion_number': '+918750500075'
});
</script>

<section style="
  background: url(assets/img/seobanner.jpg);
  background-repeat: no-repeat;
  background-size: cover;">
    <div class="outerofbanner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <div class="bannercontent">
                        <h1>Get more <span style="color:#f85a03;">Traffic, Leads, and Sales</span> with SEO</h1>
                        <p>Whether you require keyword research, content production, link building, or technical SEO, we
                            have the solution for you.</p>
                        <div class="webbtn">
                            <a href="tel:+91-8750500075"><i class="fa fa-phone"></i> Have a Project to Discuss?</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                    <div class="bnrform">
                        <div class="formset aboutsidimgwithform borderreadius">
                            <form action="lp-form.php" method="POST">
                                <h2 class="text-center">Get In Touch</h2>
                                <div class="mb-3">
                                    <i class="fa fa-user" aria-hidden="true"></i> <input type="text" name="name"
                                        id="name" placeholder="Name" class="form-control" required="">
                                </div>
                                <div class="mb-3">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> <input type="email" name="email"
                                        id="email" placeholder="Email Id" class="form-control" required="">
                                </div>
                                <div class="mb-3">
                                    <i class="fa fa-phone" aria-hidden="true"></i> <input type="number" name="number"
                                        id="number" placeholder="Phone Number" class="form-control" required="">
                                </div>
                                <div class="mb-3">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> <textarea placeholder="Message"
                                        class="form-control" id="message" name="message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn fbtn" value="Submit">
                                    <!--<button type="Submit" class="btn fbtn">Submit</button>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about us start -->
<section class="sectionpadding pb-0">
    <div class="outerofaboutsection">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="aboutsidimgwithform">
                        <div class="aboutimg">
                            <img src="assets/img/about_new2.png" alt="SEO Company in Delhi NCR">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="aboutcontent">
                        <div class="sectionheading">
                            <h2>Grow Your Website Traffic with Our SEO Service</h2>
                        </div>
                        <p>Boost your online presence and attract more visitors to your website with NeedleAds
                            Technology, your premier SEO company in Delhi NCR. Our tailored SEO services in Delhi NCR
                            are designed to skyrocket your website traffic and improve your search engine rankings. With
                            a team of experienced professionals, we craft customized strategies to suit your business
                            needs and goals.</p>
                        <p>Let us help you dominate the digital landscape and reach your target audience. Take the first
                            step towards success today – contact NeedleAds Technology for top-notch SEO services in
                            Delhi NCR. Watch your website traffic soar and achieve your business objectives with us!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us end -->

<!-- call section start -->
<section class="sectionpadding">
    <div class="outerofcallsection">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="callcontent">
                        <h3>Are You Ready to Grow Your Business to the Next Level?</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="callbtn">
                        <div class="webbtnset">
                            <a href="tel:+918750500075"><i class="fa fa-phone"></i> +91-8750 500 075</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call section end -->

<!-- Our SEO Strategies start -->
<section class="sectionpadding bgsection seoservicessection">
    <div class="outerofservicessection">
        <div class="container">
            <div class="sectionheading">
                <h2>Our SEO Strategies</h2>
                <p>The power of digital marketing with NeedleAds Technology! As a leading digital marketing agency in
                    Delhi NCR, we offer a range of services, including SEO, SMO, PPC, and web design. Our team is
                    dedicated to helping businesses like yours succeed online. Whether you're looking to increase your
                    online visibility, drive more traffic to your website, or improve your general digital presence, we
                    have the expertise to help.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 ppcservices">
                    <div class="boxservices">
                        <div class="sicon">
                            <img src="assets/img/keyword-research.png">
                        </div>
                        <div class="servicecontent">
                            <h4>Keyword Research</h4>
                            <p>We meticulously analyze keywords relevant to your business to optimize your website's
                                visibility.</p>
                            <div class="webbtnset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 ppcservices">
                    <div class="boxservices">
                        <div class="sicon">
                            <img src="assets/img/on-page-optimization.png">
                        </div>
                        <div class="servicecontent">
                            <h4>On-Page Optimization</h4>
                            <p>Improving website parts such as meta tags, headers, and content to improve search engine
                                rankings.</p>
                            <div class="webbtnset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 ppcservices">
                    <div class="boxservices">
                        <div class="sicon">
                            <img src="assets/img/link-building.png">
                        </div>
                        <div class="servicecontent">
                            <h4>Link Building</h4>
                            <p>Building high-quality backlinks from reputable websites to show authority and credibility
                                in your industry.</p>
                            <div class="webbtnset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 ppcservices">
                    <div class="boxservices">
                        <div class="sicon">
                            <img src="assets/img/performance-tracking.png">
                        </div>
                        <div class="servicecontent">
                            <h4>Performance Tracking</h4>
                            <p>Constant monitoring and analysis of SEO metrics to fine-tune strategies and ensure
                                continuous improvement.</p>
                            <div class="webbtnset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 ppcservices">
                    <div class="boxservices">
                        <div class="sicon">
                            <img src="assets/img/quality-content-creation.png">
                        </div>
                        <div class="servicecontent">
                            <h4>Quality Content Creation</h4>
                            <p>Crafting engaging and informative content that resonates with your target audience and
                                boosts organic traffic.</p>
                            <div class="webbtnset">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our SEO Strategies end -->

<!-- Professional SEO Services start -->
<section class="sectionpadding">
    <div class="outerofaboutsection">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="aboutcontent">
                        <div class="sectionheading">
                            <h2>Professional SEO Services in Delhi NCR</h2>
                        </div>
                        <p>Unlock the full potential of your online presence with our professional SEO services in Delhi
                            NCR, Delhi. At our agency, we understand the importance of visibility in the digital
                            landscape. That's why we offer Best <a
                                href="https://www.theneedleads.com/contact-us.php">SEO solutions</a> tailored to your
                            specific needs and goals.</p>
                        <p>Our team of seasoned experts specializes in optimizing websites to improve search engine
                            rankings and drive organic traffic. Through meticulous keyword research, strategic on-page
                            optimization, and quality content creation, we ensure that your website stands out amidst
                            the competition.</p>
                        <p>With our proven track record of success, we've helped numerous businesses in Delhi NCR and
                            beyond achieve their online objectives. Whether you're a small local business or a large
                            enterprise, we're committed to delivering results that exceed your expectations.</p>
                        <p>Ready to boost your online presence and attract more customers? Contact us today for a
                            personalized consultation and take the first step towards growing your business with our
                            professional SEO services in Delhi NCR, Delhi. Let's propel your website to new heights and
                            unlock its full potential together!</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="aboutsidimgwithform">
                        <div class="aboutimg">
                            <img src="assets/img/professional-seo-services.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Professional SEO Services us end -->

<!-- SEO Services start -->
<section class="sectionpadding bgsection">
    <div class="outerofindustriessection">
        <div class="container">
            <div class="sectionheading">
                <h2 class="mb-4">Our SEO Services in Delhi NCR, Delhi</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-6">
                    <div class="industriesbox">
                        <div class="industriesimg">
                            <img src="assets/img/local-seo.png">
                        </div>
                        <p>Local Seo</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-6">
                    <div class="industriesbox">
                        <div class="industriesimg">
                            <img src="assets/img/white-label-seo.png">
                        </div>
                        <p>White Label SEO</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-6">
                    <div class="industriesbox">
                        <div class="industriesimg">
                            <img src="assets/img/ecommerce-seo.png">
                        </div>
                        <p>E-commerce SEO</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-6">
                    <div class="industriesbox">
                        <div class="industriesimg">
                            <img src="assets/img/enterprise-seo.png">
                        </div>
                        <p>Enterprise SEO</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-xs-6">
                    <div class="industriesbox">
                        <div class="industriesimg">
                            <img src="assets/img/b2b-seo.png">
                        </div>
                        <p>B2B SEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SEO Services end -->

<!-- faq section start -->
<section class="faq-section sectionpadding">
    <div class="container">
        <div class="sectionheading">
            <h2 class="mb-4">Frequently Asked Questions?</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-12">
                <div class="faq" id="accordion">
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-1"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">1</span>What is SEO, and why is it important for my business?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p>SEO, or Search Engine Optimization, is the process of optimizing your website to
                                    improve its visibility on search engines like Google. It's important for your
                                    business because it helps increase organic traffic, attract potential customers, and
                                    ultimately boost sales and revenue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-2"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">2</span>How long does it take to see results from SEO services?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p>The timeline for seeing results from SEO services varies depending on factors like
                                    the competitiveness of your industry, the current state of your website, and the
                                    strategies implemented. Generally, significant improvements may be visible within a
                                    few months, but it can take six months to a year to see substantial results.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-3"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">3</span>What SEO techniques do you use?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-1"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p>We use a range of SEO techniques, including keyword research, on-page optimization,
                                    quality content creation, link building, and performance tracking. These techniques
                                    are tailored to your specific business goals and target audience to maximize
                                    effectiveness.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-4"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">4</span>Will my website need ongoing SEO services?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-1"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes, SEO is an ongoing process. Search engines constantly update their algorithms,
                                    and your competitors are also working to improve their rankings. Ongoing SEO
                                    services ensure that your website remains competitive and continues to attract
                                    organic traffic over time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-5"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">5</span>How do you measure the success of your SEO services?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-1"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p>We measure the success of our SEO services through various metrics, including website
                                    traffic, keyword rankings, conversion rates, and ROI. By analyzing these metrics
                                    regularly, we can track progress, identify areas for improvement, and demonstrate
                                    the impact of our services on your business growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section end -->
<footer class="" style="background: #000; text-align: center; padding: 25px 0">
    <div class="container">
        <div class="copyright" style="color: #fff;
">Copyright © 2024 All Rights Reserved by @NeedleAds Technology</div>
    </div>
</footer>

<!-- Pop-up Start -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <div class="offermap">
            <div class="row">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 offerbgset"
                    style="background: url('assets/img/offerbg.jpg');">
                    <div class="offercontent">
                        <h4>Book <b>free SEO Audit</b></h4>
                        <h2><span class="mblockfix">Get Upto</span> <b>20% Off</b> <span cass="fixm">Today</span> </h2>
                        <p>Rank Your Website On Top of The Google Page with Our Advanced SEO Service</p>
                        <div class="calltobtn">
                            <a href="tel:+918750500075" target="_blank"><img src="assets/img/call.png" alt=""></a>
                            <a href="https://wa.link/0p3op6" target="_blank">
                                <img src="assets/img/whatsapp-img.png" alt="" title="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 pfsl">
                    <div class="bnrform">
                        <form action="seo-lp-form.php" method="POST" id="emailForm">
                            <h3>Send Enquiry</h3>
                            <div class="mb-3">
                                <i class="fa fa-user" aria-hidden="true"></i> <input type="text" name="name" id="name"
                                    placeholder="Name" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <i class="fa fa-envelope" aria-hidden="true"></i> <input type="email" name="email"
                                    id="email" placeholder="Email Id" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <i class="fa fa-phone" aria-hidden="true"></i> <input type="tel" name="number"
                                    id="number" placeholder="Phone Number" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <i class="message fa fa-envelope" aria-hidden="true"></i> <textarea
                                    placeholder="Message" class="form-control" id="message" name="message"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="Submit" class="btn fbtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Show the popup after 7 seconds
setTimeout(function() {
    document.getElementById('popup').style.display = 'block';
}, 1000);

// Close the popup when the user clicks on the close button
document.querySelector('.popup .close').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
});

// Close the popup when the user clicks anywhere outside of the popup content
window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('popup')) {
        document.getElementById('popup').style.display = 'none';
    }
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>