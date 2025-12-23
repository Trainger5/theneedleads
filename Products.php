 <?php
$meta_title = "Case study NeedleAds Technology - +91-8750500075";
$meta_description = "We are the leading digital marketing company in Janakpuri, Delhi. Our team of professionals delivers the finest service and meets their business requirements.";
$canonical_url = "https://www.theneedleads.com/Products.php";
?>
<?php include './include/header.php';?>


    <style>
     .thank-you-message {
         position: fixed;
         top: 20px;
         left: 50%;
         transform: translateX(-50%);
         background-color: #4CAF50;
         color: white;
         padding: 10px 20px;
         border-radius: 5px;
         font-size: 16px;
         display: none;
         z-index: 1000;
     }


     .badge-base {
         transition: transform 0.2s ease, box-shadow 0.2s ease;
     }

     .badge-base:hover {
         transform: translateY(-3px);
         box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
     }
     </style>

     <script>
     // Show the message
     document.getElementById("thankYouMessage").style.display = "block";

     // Auto-hide the message after 3 seconds
     setTimeout(function() {
         document.getElementById("thankYouMessage").style.display = "none";
     }, 3000);
     </script>

<section class="bannersectionstr" style="
    background: url(assets/img/portfolio/portfoliobnr.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
         <div class="outerofbanner">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                         <div class="bannercontent ">
                             <h1>Products Page </h1>
                             <p>Client Overview</p>
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

     <section class="sectionpadding">
         <div class="ouerofportfolio">
             <div class="container">
                 <h1 class="text-center mb-5">Products</h1>
                 <!-- Tab panes -->
                 <div class="tab-content casestudy">
                     <div id="web-design" class="container tab-pane active"><br>
                         <div class="portfolioset">
                             <div class="row row-gap-4 justify-content-center">

                                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                     <a href="https://mailer123.com/">
                                         <div class="portfoliobox">
                                             <div class="pimgbox">
                                                 <img src="./assets/img/products/mailer.png" alt="Web Design Portfolio">
                                             </div>
                                             <div class="portfoliocontent">
                                                 <h3><a href="ssi-aeration.php">Email Marketing & Automation Tools</a>
                                                 </h3>
                                             </div>
                                         </div>
                                     </a>
                                 </div>



                                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                     <a href="#">
                                         <div class="portfoliobox">
                                             <div class="pimgbox">
                                                 <img src="assets/img/portfolio/web-design/bersache.jpg"
                                                     alt="Web Design Portfolio">
                                             </div>
                                             <div class="portfoliocontent">
                                                 <h3><a href="website-designing-for-bersache-shoes.php">PushAds123</a>
                                                 </h3>
                                             </div>
                                         </div>
                                     </a>
                                 </div>



                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>


     <?php include 'include/footer.php';?>