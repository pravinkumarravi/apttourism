<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AP Travels</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css">

    <link rel="stylesheet" href="terms/font-awesome.min.css">
    <link rel="stylesheet" href="terms/style.minified.css">
    <link rel="stylesheet" href="terms/main.css">
    <link rel="stylesheet" href="terms/padmavathy.css">
    <link rel="stylesheet" href="terms/roboto.css">
    <link rel="stylesheet" href="terms/newstyle.css">
    <script src="terms/jquery-2.2.4.min.js"></script>
    <script src="terms/scripts.minified.js.download"></script>
    <script src="terms/main.js.download"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .quality p {
            color: black;
            text-decoration: none;
            margin-bottom: 0;
            font-size: 18px;
        }

        .quality i {
            font-size: 22px;
        }

        .footer__widget p {
            list-style: none;
            font-size: 14px;
            color: #a4a4a4;
            line-height: 36px;
        }

        .footer__newslatter p:hover {
            font-size: 16px;
        }

        #social {

            padding: 10px;
            cursor: move;
            z-index: 10;
            color: #fff;

        }

        .social:hover {
            position: fixed;
            left: 110%;
            animation: none;
        }

        .social ul {
            list-style-type: none;
            padding: 0;
            transform: translatex(-270px);
        }

        .social {
            position: fixed;
            right: 15px;
            bottom: 15px;
            left: 115% !important;

        }

        .social ul li {
            display: block;
            margin: 5px;
            background-color: rgba(0, 0, 0, 0.5);
            width: 230px;
            text-align: left;
            padding: 5px;
            font-size: 20px;
            font-weight: bold;
            border-bottom-left-radius: 34px;
            border-top-left-radius: 34px;
            transition: all 1s;
            height: 70px;
        }

        .social ul li:hover {
            transform: translateX(-110px);


        }

        .social ul li.twitter:hover {
            background-color: #c60001 !important;
        }


        .social ul li a {
            color: white;
            text-decoration: none;
        }

        .social ul li i {
            text-align: center;
            margin-left: 4px;
            color: black;
            background-color: white;
            padding: 1px;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            margin-top: 10px;
            font-size: 35px;
            transform: rotate(0deg);
        }

        .social p {
            color: #fff;
            margin-top: -55px;
            margin-left: 30px;
            text-align: center;
            font-weight: bold;
        }

        .social ul li:hover i {
            transform: rotate(360deg);
            transition: all 1s;
        }

        @media(max-width:540px) {
            .social {
                left: 148% !important;
                z-index: 1;
                top: 68% !important;
            }

            .social:hover {
                position: fixed;
                left: 134% !important;
                z-index: 1;
            }
        }

        @media(max-width:380px) {

            .social {
                left: 153% !important;
                z-index: 1;
            }

            .social:hover {
                position: fixed;
                left: 136% !important;
                z-index: 1;
            }
        }

        @media(max-width:340px) {

            .social {
                left: 162% !important;
            }

            .social:hover {
                position: fixed;
                left: 139% !important;
                z-index: 1;
            }
        }

        .social {

            animation-name: flash;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;


            -webkit-animation-name: flash;
            -webkit-animation-duration: 1s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;


            -moz-animation-name: flash;
            -moz-animation-duration: 1s;
            -moz-animation-timing-function: linear;
            -moz-animation-iteration-count: infinite;
        }

        @keyframes flash {
            0% {
                opacity: 1.0;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1.0;
            }
        }


        @-webkit-keyframes flash {
            0% {
                opacity: 1.0;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1.0;
            }
        }

        @-moz-keyframes flash {
            0% {
                opacity: 1.0;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1.0;
            }
        }

        @media (min-width: 1200px) {
            .social {
                left: 113.5% !important;
                position: fixed;
            }

            .social:hover {
                position: fixed;
                left: 109% !important;
                animation: none;
            }
        }
    </style>
</head>

<body>


    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">

        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/LOGO.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">

                            <div class="header__logo">
                                <a href="./index.html"><img src="img/LOGO.png" alt="" width="250" height="100" style="margin-top: -30px;"></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: rgb(255, 0, 0);">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="<?php echo url('/') ?>">Home</a></li>
                            <li><a href="<?php echo url('Tirupati_Packages') ?>">Tirupati Packages</a></li>
                            <li><a href="<?php echo url('rental_Packages') ?>">Rental Packages</a></li>
                            <li><a href="<?php echo url('explore-in-a-day') ?>">Local One Day Trip</a></li>
                            <li><a href="<?php echo url('out_station') ?>">Out Station</a></li>
                            <li><a href="<?php echo url('special') ?>">Special Darshan</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Call for booking start -->

    <nav class="social" id="social" style="top: 238px; left: 1656px;">
        <ul>
            <li class="twitter"><a href="tel:+91-86087 9999"><i class="fa fa-phone" aria-hidden="true"></i>
                    <p>For Booking <br>+91-86087 9999</p>
                </a></li>
        </ul>

    </nav>

    <script>
        //Make the DIV element draggagle:
        dragElement(document.getElementById("social"));

        function dragElement(elmnt) {
            var pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;
            if (document.getElementById(elmnt.id + "header")) {
                /* if present, the header is where you move the DIV from:*/
                document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
            } else {
                /* otherwise, move the DIV from anywhere inside the DIV:*/
                elmnt.onmousedown = dragMouseDown;
            }

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                // get the mouse cursor position at startup:
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                // call a function whenever the cursor moves:
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                // calculate the new cursor position:
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                // set the element's new position:
                elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
            }

            function closeDragElement() {
                /* stop moving when mouse button is released:*/
                document.onmouseup = null;
                document.onmousemove = null;
            }
        }
    </script>

    <!-- call for booking end -->


    <section id="services" class="section-fulllatest">
        <div class="container">
            <h2 class="text-center">AP Travels Terms and Conditions</h2><br><br>
            <div class="row text-center">
                <h5>AP Travels – Chennai to tirupati tour packages, We follow certain terms and condition. Every Company has certain norms which has to follow strictly to move business/Company hassle free.</h5>
            </div>

            <hr style="margin-top: 34px;">



        </div>
    </section>
    <!-- #services -->







    <section class="section-fulllatest gray-bg-3 relative">
        <div class="container">
            <h3 class="title-t">How to book Package from AP Travels </h3><br>
            <div class="col-xs-12 col-lg-12">


                <!--   <input type="text" class="form-control typeahead ml-input" placeholder="States of USA"> -->


                <blockquote class="bquotes bquotes-1 dark white-bg shadow-default">
                    <ul>
                        <li>1.There are two options to book the Chennai to tirupati package from AP Travels</li>
                        <ul class="newlink">
                            <li>a) Online Booking: Pilgrim can visit our website www.apttourism.com and check our package price details and confirm the available date through Chat or Phone call and proceed with the booking for the required package and provide the Details for Ticket booking and make payment. Booking confirmation will be sent to the mail. </li>
                            <li>b) Offline Booking: Pilgrim can call +91-86087 9999 any one of these number to reach us and know about the required package details for Tirupati tour. We will be sending Itinerary details and payment option details over Whatsapp or Email.and then, Customers will be sharing their Details in the whatsapp chat or Email to book the Darshan Tickets. Once we receive Advance payment from the Customers , will send the Ticket copies and invoice for the Advance payment or Visit our branch office to book Tirupati tour packages </li>
                        </ul>
                        <li>2. Here Pilgrims need to share their Id proofs (Adhaar Id or Voter Id ) for booking Special Entry Ticket </li>
                        <li>3. Driver will act as a guide in Tirupati and Tirumala for Pilgrim
                        </li>
                        <li>4. Standard price , No Negotiation in the package price</li>
                        <li>5. Driver Details and Car details will be shared one day before the travel date before 6.00 PM</li>
                        <li>6. Office opening timing: Morning 10:00 AM – Evening 7:00 PM</li>
                        <li>7. AP Travels , Helpline number - +91-86087 9999 available 24/7</li>

                    </ul>

                </blockquote><br>


                <span class="visible-xs mb-100"></span>

            </div> <!-- end col-md-8 -->


        </div>

    </section>

    <section class="section-fulllatest  relative">
        <div class="container">
            <h3 class="title-t">Ticket Cancellation and Booking Cancellation </h3><br>
            <div class="col-xs-12 col-lg-12">


                <!--   <input type="text" class="form-control typeahead ml-input" placeholder="States of USA"> -->


                <blockquote class="bquotes bquotes-1 dark white-bg shadow-default">
                    <ul style="list-style-type: circle;">
                        <li>Tirupati Special Entry Rs.300/- tickets cannot be cancelled as per TTD norms.</li>

                        <li>If the pilgrim wants to cancel the trip with no cancellation fee. Need to cancel the booking atleast within 24 hours . Special entry ticket cost cannot be refunded , rest amount will be refunded(Depends how much you are paid). </li>
                        <li>If the customer cancelled after the driver and car details sent or updating the cancellation very late means , will refund the amount(Depends how much you are paid) excluding Special Entry Darshan tickets and Driver bata (500/-).
                        </li>


                    </ul>

                </blockquote><br>


                <span class="visible-xs mb-100"></span>

            </div> <!-- end col-md-8 -->

        </div>


    </section>
    <section class="section-fulllatest gray-bg-3  relative">
        <div class="container">
            <h3 class="title-t">TTD Devasthanam – Terms and Conditions </h3><br>
            <div class="col-xs-12 col-lg-12">


                <!--   <input type="text" class="form-control typeahead ml-input" placeholder="States of USA"> -->


                <blockquote class="bquotes bquotes-1 dark white-bg shadow-default">
                    <ul style="list-style-type: circle;">
                        <li>Dress code is mandatory </li>
                        <ul style="list-style-type: circle;margin-left:25px;color: #C60001; ">
                            <li>MALE: Dhoti¸Skirt/Kurtha, Pyjama
                            </li>
                            <li>FEMALE:
                                Saree/Half saree Chudidar with Dupatta

                            </li>
                        </ul>
                        <li>Consuming alcohol strictly prohibited during the packages.</li>
                        <li>The Tirupati Tirumala Balaji Pilgrims entry with chappels/shoes is not permitted into Qlines, mada streets and temple.
                        </li>
                        <li>The Tirupati Tirumala Balaji Pilgrims entry with chappels/shoes is not permitted into Qlines, mada streets and temple.
                        </li>
                        <li>At the time of entry Tirupati Tirumala Balaji Pilgrim should produce the same original ID used in the time of booking. For Children under 12 years, age proof should be brought to gain entry fee of cost.
                        </li>
                        <li>The Tirupati Balaji Pilgrims should not carry any luggage/cell phones/electronic gadgets while reporting at SMC 211 or ATC Car Parking Area.
                        </li>
                    </ul>

                </blockquote><br>


                <span class="visible-xs mb-100"></span>

            </div> <!-- end col-md-8 -->

        </div>


    </section>
    <section class="section-fulllatest  relative">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-50">
                    <center>
                        <h3 class="text-uppercase"><b>FAQ</b></h3>
                    </center>
                    <ul class="collapsible style2" data-collapsible="accordion">

                        <li class="">
                            <div class="collapsible-header" style="font-size:14px;">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus close"></i>
                                1. What is the advance amount to be paid?
                            </div>
                            <div class="collapsible-body" style="display: none;">
                                <p>Half the package amount is considered as advance amount.</p>
                            </div>
                        </li>
                        <li class="">
                            <div class="collapsible-header" style="font-size:14px;">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus close"></i>
                                2.TTD whatsapp number ?
                            </div>
                            <div class="collapsible-body" style="display: none;">
                                <p>An Whatsapp Number- 9399399399 and an Email: helpdesk@tirumala.org .</p>
                            </div>
                        </li>

                        <li class="">
                            <div class="collapsible-header" style="font-size:14px;">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus close"></i>
                                3. Is ticket amount refundable?
                            </div>
                            <div class="collapsible-body" style="display: none;">
                                <p>No, Ticket amount cannot be refunded because Tirupati special entry tickets cannot be postponed or cancelled .</p>
                            </div>
                        </li>
                        <li class="">
                            <div class="collapsible-header" style="font-size:14px;">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus close"></i>
                                4. Is Darshan tickets are guaranteed or confirmed?
                            </div>
                            <div class="collapsible-body" style="display: none;">
                                <p>Yes, We always confirm the darshan tickets over Email or Whatsapp .</p>
                            </div>
                        </li>
                        <li class="active">
                            <div class="collapsible-header active" style="font-size:14px;">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus close"></i>
                                5. What is the advantage of booking through AP Travels ?
                            </div>
                            <div class="collapsible-body" style="display: block;">
                                <p>100% confirmed balaji darshan , Our driver will act as a guide in tirupati, in this hectic lifestyle in just one day you can take the darshan with our customized Itinerary.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end .col-6 -->
                <div class="col-md-6 mb-50">
                    <center style="visibility: hidden;">
                        <h3 class="text-uppercase"><b>FAQ</b></h3>
                    </center>
                    <p style="color: #332A2A;font-weight: bold;font-size: 17px;margin-left: 24px;">CHENNAI TO TIRUPATI FREE SERVICE AREA IN CHENNAI FOR PICKUP AND DROP</p>
                    <p class="footer-faq">
                        Avadi, Pattabiram, West Chennai, Alapakkam, Anna Nagar, Mogappair, Arumbakkam, Maduravoyal, Koyambedu, Ashok Nagar, KK Nagar, Karambakkam, Vadapalani. Saligramam, Virugambakkam, Alwarthirunagar, Valasaravakkam, Thirunindravur, Thirumangalam, Thirumullaivayal, Thiruverkadu, Nandambakkam, Nerkundrum, Nesapakkam, Nolambur, Ramapuram, Mugalivakkam, Mangadu, Porur, Poonamallee, Moulivakkam, Mylapore, velachery, Perungudi, Alandur, Adyar, Besant Nagar, Triplicane, T. Nagar, Thiruvanmiyur,Saidapet, Guindy, Madipakkam, Nanganallur, Taramani, Pallikaranai, Keelkattalai, Kovilambakkam, Chromepet, Pallavaram, Tambaram, Palavanthangal, Mudichur, Thirumazhisai, Kattupakkam, Iyyappanthangal, Pozhichalur, Anakaputhur,Pammal, Kundrathur, Thiruneermalai, Chitlapakkam, Selaiyur, Madambakkam, Sithalapakkam, Nanmangalam, Karapakkam, Sowcarpet, Periametu, Choolai, Veppery, Central, Padi, Korattur, Ambattur, Ayapakkam, Annanur.</p>

                </div>
            </div>
            <!-- end .row -->

        </div>
    </section>



    <!-- Testimonial Section Begin -->
    <section class="testimonial spad bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="quality">
                        <p><i class="fa fa-certificate" aria-hidden="true"></i><b>&nbsp;&nbsp;100% &nbsp;SATISFACTION</b></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="quality">
                        <p><i class="fa fa-certificate" aria-hidden="true"></i><b>&nbsp;&nbsp;CUSTOMER SUPPORT</b></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="quality">
                        <p><i class="fa fa-certificate" aria-hidden="true"></i><b>&nbsp;&nbsp;SAFE & SECURE JOURNEY</b></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="quality">
                        <p><i class="fa fa-certificate" aria-hidden="true"></i><b>&nbsp;&nbsp;ACCEPT ONLINE PAYMENT</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- Testimonial Section End -->


    <!-- Footer Section Begin -->


    <footer class="footer set-bg" style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>AP TOURS & TRAVELS</h6>
                        <p>No. 51 Venkatnarayana Road,<br>
                            T-Nagar,<br>
                            Chennai -600017.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>PAGES LINKS</h6>
                        <a href="<?php echo url('/') ?>">
                            <p>Home</p>
                        </a>
                        <a href="about.html">
                            <p>About us</p>
                        </a>
                        <a href="contact.html">
                            <p>Contact us</p>
                        </a>
                        <a href="privacy.html">
                            <p>Privacy Policy</p>
                        </a>
                        <a href="return.html">
                            <p>Return & Cancellation Policy</p>
                        </a>
                    </div>


                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>QUICK LINKS</h6>
                        <a href="<?php echo url('out_station') ?>">
                            <p>Out station</p>
                        </a>
                        <a href="<?php echo url('rental_Packages') ?>">
                            <p>Rental Packages</p>
                        </a>
                        <a href="<?php echo url('explore-in-a-day') ?>">
                            <p>Local One Day Trip</p>
                        </a>
                        <a href="<?php echo url('Tirupati_Packages') ?>">
                            <p>Tirupathi Tour Packages</p>
                        </a>
                        <a href="<?php echo url('kalahasti') ?>">
                            <p>Kalahasthi Tour Packages</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src=" js/jquery-3.3.1.min.js "></script>
    <script src=" js/bootstrap.min.js "></script>
    <script src=" js/jquery.nice-select.min.js "></script>
    <script src=" js/jquery.barfiller.js "></script>
    <script src=" js/jquery.magnific-popup.min.js "></script>
    <script src=" js/jquery.slicknav.js "></script>
    <script src=" js/owl.carousel.min.js "></script>
    <script src=" js/jquery.nicescroll.min.js "></script>
    <script src=" js/main.js  "></script>

</body>

</html>