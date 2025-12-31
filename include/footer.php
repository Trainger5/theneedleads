<style>
.socialmedia {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 10px;
}

.socialmedia li a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #333;
    color: #fff;
    font-size: 18px;
    transition: 0.3s;
}

.socialmedia li a:hover {
    background: #ff4d4d;
    color: #fff;
}
</style>

<!-- footer start -->
<footer class="sectionpadding">
    <div class="outeroffooter">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="footerlogo">
                        <a href="<?php echo $linkBase ?? ''; ?>index.php"><img src="<?php echo $assetBase ?? ''; ?>assets/img/sitelogo.png"></a>
                    </div>
                    <p class="pt-3">At NeedleAds Technology, we pride ourselves on our commitment to delivering
                        exceptional results and exceeding our clients' expectations. With our proven track record of
                        success, you can trust us to take your business to new heights.</p>
                    <ul class="socialmedia">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61552220380398">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/needle_ads/">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/103366697/admin/dashboard/">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://in.pinterest.com/theneedleads/">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                    <div class="footerlist">
                        <h3>Explore</h3>
                        <ul>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>index.php">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>about-us.php">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>contact-us.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>privacy-policy.php">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>term-condition.php">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                    <div class="footerlist">
                        <h3>Services</h3>
                        <ul>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>website-design.php">Website Design</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>website-development.php">Website Development</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>mobile-app-development.php">Mobile Application</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>email-marketing.php">Email Marketing</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>ppc-company-delhi.php">Google Ads</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>social-media-marketing.php">SMM</a>
                            </li>
                            <li>
                                <a href="<?php echo $linkBase ?? ''; ?>seo-company-janakpuri.php">SEO Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="footerlist contactinfo">
                        <h3>Address</h3>
                        <ul class="pl02">
                            <li class="pl0">
                                <h4>Head Branch</h4>
                                <ul>
                                    <li><a href="https://maps.app.goo.gl/eeYEakh6bU2eWKe27"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i> 146-C Hastsal, Uttam Nagar, Delhi-110059 <br>
                                            Near Kendriya Vidyalaya</a></li>
                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Plot No 202,
                                            Phase 8B, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab
                                            140308</a></li>
                                    <li><a href="tel:+918750500075"><i class="fa fa-phone" aria-hidden="true"></i>
                                            +91-8750500075</a></li>
                                </ul>
                                <ul>

                                </ul>
                            </li>
                            <li class="pl0">
                                <h4>Branch Office</h4>
                                <ul>
                                    <li><a href="https://maps.app.goo.gl/e26D5JVerMapDFKt9"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i> 60 Goodwin Drive, North Brunswick, New Jersey
                                            08902 10 Briggs Ave Monroe NJ 08831</a></li>
                                    <li><a href="tel:+17027276095"><i class="fa fa-phone" aria-hidden="true"></i>
                                            +1(702) 727-6095</a></li>
                                </ul>
                            </li>
                            <li class="pl0">
                                <h4>UK Office</h4>
                                <ul>
                                    <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> 20 Dowson Close
                                            Se5 8AS London</a></li>
                                    <li><a href="tel:+442046022672"><i class="fa fa-phone" aria-hidden="true"></i> +44
                                            20 4602 2672</a></li>
                                </ul>
                            </li>
                            <li>
                            <li>
                                <a href="mailto:info@theneedleads.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    info@theneedleads.com</a>
                            </li>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/668fa2dbc3fb85929e3e034d/1i2gh8and';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script> -->

<!-- footer end -->

<!-- copyright start -->
<div class="outerofcopy">
    <div class="container">
        <p>Copyright © 2024 All Rights Reserved by <a href="https://www.theneedleads.com/"
                style="color:#fff; text-decoration: none;">@NeedleAds Technology</a></p>
    </div>
</div>
<!-- copyright end -->
<script type="text/javascript" src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- =====================================owl slider======================= -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- =====================================owl slider======================= -->
<script>
function makeContact() {
    var phoneNumber = "+918750500075"; // your number
    var whatsappMessage = "Hello, I’d like to get in touch";

    // Detect if device can make calls (basic check for mobile)
    var isMobile = /Mobi|Android|iPhone/i.test(navigator.userAgent);

    if (isMobile) {
        // Try to open phone dialer
        window.location.href = "tel:" + phoneNumber;
    } else {
        // Open WhatsApp Web with message
        var whatsappUrl = "https://wa.me/" + phoneNumber.replace("+", "") + "?text=" + encodeURIComponent(
            whatsappMessage);
        window.open(whatsappUrl, "_blank");
    }
}
</script>

<!-- counter down -->
<script type="text/javascript">
function visible(partial) {
    var $t = partial,
        $w = jQuery(window);

    // If there is no element to check, treat as not visible
    if (!$t || !$t.length) {
        return false;
    }

    var viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        off = $t.offset();

    // Guard against unexpected undefined offsets
    if (!off) {
        return false;
    }

    var _top = off.top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));
}

$(window).scroll(function() {
    var $digits = $('.count-digit');
    if (!$digits.length) return;

    if (visible($digits)) {
        if ($digits.hasClass('counter-loaded')) return;
        $digits.addClass('counter-loaded');

        $digits.each(function() {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate(
                { Counter: $this.text() },
                {
                    duration: 5000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.ceil(this.Counter));
                    }
                }
            );
        });
    }
});
</script>

<!-- ===============================our partner====================== -->
<script type="text/javascript">
jQuery("#carousel").owlCarousel({
    autoplay: true,
    rewind: true,
    /* use rewind if you don't want loop */
    margin: 20,
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 2000,
    smartSpeed: 800,
    nav: true,
    responsive: {
        0: {
            items: 2
        },

        600: {
            items: 3
        },

        1024: {
            items: 4
        },

        1366: {
            items: 5
        }
    }
});
</script>
<!-- ===============================reivew====================== -->
<script type="text/javascript">
jQuery("#carouseltwo").owlCarousel({
    autoplay: true,
    rewind: true,
    margin: 20,

    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 2000,
    smartSpeed: 800,
    nav: true,
    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 2
        },

        1024: {
            items: 2
        },

        1366: {
            items: 2
        }
    }
});
</script>

<!-- ======================word limit======================== -->
<script type="text/javascript">
$(".text-box p").text(function(index, currentText) {
    var maxLength = $(this).parent().attr('data-maxlength');
    if (currentText.length >= maxLength) {
        return currentText.substr(0, maxLength) + "...";
    } else {
        return currentText
    }
});
</script>
<!-- ======================word limit======================== -->

<script>
$(document).ready(function() {
    $("#drop").click(function() {
        $("#dropshow").slideToggle("slow");
    });

    $("#dropf").click(function() {
        $("#dropshowf").slideToggle("slow");
    });

    $("#dropftwo").click(function() {
        $("#dropshowftwo").slideToggle("slow");
    });

    $("#droptwo").click(function() {
        $("#dropshowtwo").slideToggle("slow");
    });

    $("#navbar-toggle").click(function() {
        $(".nav-list").slideToggle("slow");
    });
});
</script>


<script type="text/javascript">
jQuery("#carouseltwoo").owlCarousel({
    autoplay: true,
    rewind: true,
    margin: 20,

    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 2000,
    smartSpeed: 800,
    nav: true,
    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 3
        },

        1024: {
            items: 3
        },

        1366: {
            items: 4
        }
    }
});
</script>
<!--bocher download code-->
<script type="text/javascript">

</script>

<script type="text/javascript">
// The function toggles more (hidden) text when the user clicks on "Read more". The IF ELSE statement ensures that the text 'read more' and 'read less' changes interchangeably when clicked on.
$('.moreless-button').click(function() {
    $('.moretext').slideToggle();
    if ($('.moreless-button').text() == "Read more") {
        $(this).text("Read less")
    } else {
        $(this).text("Read more")
    }
});
</script>


<!-- call or WhatsApp msg-->
<script>
function makeCallOrWhatsApp() {
    const phone = '+918750500075';
    // Check if device is mobile
    const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    if (isMobile) {
        // Mobile: use tel link
        window.location.href = `tel:${phone}`;
    } else {
        // Desktop: open WhatsApp Web
        const message = encodeURIComponent("Hello, I want to get started");
        window.open(`https://wa.me/${phone.replace('+','')}?text=${message}`, '_blank');
    }
}
</script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: false,     
    mirror: true    
  });
</script>