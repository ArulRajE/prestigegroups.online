<?php
if(($_SERVER["REQUEST_METHOD"]=="POST")||($_SERVER["REQUEST_METHOD"]=="post"))
{
    
    function sendmail(&$formcontent){
        $recipient1 = "info@prestigegroups.online";
$recipient2 = "manishgupta3141@gmail.com";
$recipient3 = "manishgupta@nobleeden.in";
$subject = "Enquiry From  Prestige Waterford Website";
$mailheader = "From: info@prestigegroups.online\r\n";
if((mail($recipient1, $subject, $formcontent, $mailheader))&&(mail($recipient2, $subject, $formcontent, $mailheader))&&(mail($recipient3, $subject, $formcontent, $mailheader)))
{
    header( "refresh:5;url=https://prestigegroups.online/index.html" );

}
else
{
echo '<script>alert("Error sending your message. Please try again later.");window.location.href="index.html";</script>';
}
}


    if(isset($_POST['submit1'])) {
        $Name1=$_POST['name1'];
        $Phone1=$_POST['phone1'];
        $formcontent="Name: $Name1\nPhone: $Phone1";
        sendmail($formcontent);
        }
        if(isset($_POST['submit2'])) {
            $Name2=$_POST['name2'];
            $Phone2=$_POST['phone2'];
            $Email2=$_POST['email2'];
            $Message2=$_POST['message2'];
            $Service2=$_POST['service2'];
            $formcontent="Name: $Name2\nEmail: $Email2\nPhone: $Phone2\nService: $Service2\nMessage: $Message2\n";
        sendmail($formcontent);

        }
        if(isset($_POST['submit3'])) {
            $Name3=$_POST['name3'];
            $Phone3=$_POST['phone3'];
            $formcontent="Name: $Name3\nPhone: $Phone3";
        sendmail($formcontent);
        }


    }
else
{
    echo '<script>alert("Error sending your message. Please try again later.");window.location.href="index.html";</script>';
}
?>


<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Prestige Waterford - Whitefield</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header
    class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-transparent--- gradient-color-4---">


    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="index.html"><img src="img/logo.png" alt="Prestige Waterford Logo"></a>
                        </div>

                    </div>
                </div>
                <div class="col header-menu-column">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>

                                    <li><a href="#Home">Home</a></li>
                                    <li><a href="#Overview">Overview</a></li>
                                    <li><a href="#Walkthrough">Walkthrough</a></li>
                                    <li><a href="#FloorPlan">Floor Plan</a></li>
                                    <li><a href="#Amenities">Amenities</a></li>
                                    <li><a href="#Contact">Contact</a></li>
                                    <li class="special-link">
                                        <a href="tel:+917899789917"><i class="fas fa-mobile-alt"></i> +91 7899789917</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ltn__header-options ltn__header-options-2 ">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path
                                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                    id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path
                                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                    id="bottom"
                                    transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->

   


    <div class="ltn__utilize-overlay"></div>

   
    <!-- 404 area start -->
    <div class="ltn__404-area ltn__404-area-1  section-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-404-inner text-center mt-120 mb-60">
                       
                        <i class="fa fa-check-circle fa-6x" aria-hidden="true" ></i>
                        <h2>Thank you!</h2>
                        <!-- <h3>Oops! Looks like something going rong</h3> -->
                        <p>Your submission is recieved and we will contact you soon.</p>
                        <div class="btn-wrapper">
                            <a href="index.html" class="btn btn-transparent"><i class="fas fa-long-arrow-alt-left"></i> BACK TO HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 area end -->

   
    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">

        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="ltn__copyright-design clearfix text-center">
                            <p>All Rights Reserved @ Company <span class="current-year"></span></p>
                            <p class="footer-text"><strong>Disclaimer : </strong>The content is for information purposes only and does not constitute an offer to avail of any service. Prices mentioned are subject to change without notice and properties mentioned are subject to availability. Images for representation purpose only. This is not the official website. Website maintained by our online marketing agency pact partners. We may share data with rera registered brokers/companies for further processing. We may also send updates to the mobile number/email id registered with us.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <div class="footer-icon">
        <a href="tel:+917899789917" class="">Call Now</a>
        <a data-toggle="modal" href="#add_data_Modal" class="scroll">Enquire</a>
    </div>
    <a href="https://wa.me/917899789917" class="whatsapp_float" target="_blank"> <i
            class="fab fa-whatsapp whatsapp-icon"></i></a>
    <!-- FOOTER AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>

</html>

