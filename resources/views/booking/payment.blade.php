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

   
    <link rel="stylesheet" href="terms/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/terms.css" type="text/css">
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
    <header>
	<div class="container">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form>
				Full name
				<input type="text" name="" placeholder="Enter name">
				Email
				<input type="text" name="" placeholder="Enter email">

				Address
				<input type="text" name="" placeholder="Enter address">
				
				City
				<input type="text" name="" placeholder="Enter City">
				<div id="zip">
					<label>
						State
						<select>
							<option>Choose State..</option>
							<option>Rajasthan</option>
							<option>Hariyana</option>
							<option>Uttar Pradesh</option>
							<option>Madhya Pradesh</option>
						</select>
					</label>
						<label>
						Zip code
						<input type="number" name="" placeholder="Zip code">
					</label>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
			<form>
				Accepted Card <br>
				<img src="img/card1.png" width="100">
				<img src="img/card2.png" width="50">
				<br><br>

				Credit card number
			<input type="text" name="" placeholder="Enter card number">
				
				Exp month
				<input type="text" name="" placeholder="Enter Month">
				<div id="zip">
					<label>
						Exp year
						<select>
							<option>Choose Year..</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
						</select>
					</label>
						<label>
						CVV
						<input type="number" name="" placeholder="CVV">
					</label>
				</div>
			</form>
			<input type="submit" name="" value="Proceed to Checkout">
		</div>
	</div>
</header>
<style>
    *{padding:0; margin:0; box-sizing: border-box; font-family:sans-serif;}



h3{
	margin-top: 1rem;
	color:#2c3e50;
	}

form input[type="text"]{
	width: 100%;
	padding: 0.5rem 0.7rem;
	margin: 0.5rem 0;
	outline: none;
}


input[type="submit"]{
	width: 100%;
	padding: 0.7rem 1.5rem;
	background: #34495e;
	color: white;
	border: none;
	outline: none;
	margin-top: 1rem;
	cursor: pointer;
}

input[type="submit"]:hover{
	background: #2c3e50;
}





</style>
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