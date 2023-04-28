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
            <a href="<?php echo url('/') ?>"><img src="img/LOGO.png" alt=""></a>
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
                                <a href="<?php echo url('/') ?>"><img src="img/LOGO.png" alt="" width="250" height="100" style="margin-top: -30px;"></a>
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
                        <li ><a href="<?php echo url('/') ?>">Home</a></li>
                            <li><a href="<?php echo url('Tirupati_Packages') ?>">Tirupati Packages</a></li>
                            <li><a href="<?php echo url('rental_Packages') ?>">Rental Packages</a></li>
                            <li class="active"><a href="<?php echo url('explore-in-a-day') ?>">Local One Day Trip</a></li>
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

    <!-- One day trip Start -->
    <div class="container justify-content-center text-center"><br><br><br>

        <h3>CHENNAI LOCAL TRIP</h3><br><br>

        <p>Our one day Chennai Local Sightseeing tour by private car crams in the iconic landmarks of the city. Get immersed in South Indian culture with the visit to the famous temples situated in the city. Beaches are the prime attractions in Chennai and are always crowded with a big number of tourists. Your amazing tour begins with the visit to the historic site of Fort St. George. Proceed further to the glorious Kapaleeshwar Temple that is associated with several legendary stories. Worship Lord Krishna enshrined in the renowned Parthasarathy Temple. Visit the fabulous Marina Beach and enjoy the views of the wonderful waves hitting the coastline. Learn about the art and culture from the Pallava period till date with a walk through the Government Museum and pay your homage to the eminent Tamil poet Valluvar at the Valluvar Kottam.</p>
        <h5 class="text-danger">Special Arrangements for NRI, Baby Below one year and Senior Citizen (65 and above).</h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/etios.png">
                        <div class="product__label">
                            <span>Etios</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">One Day Trip Packages</a></h6>
                        <div class="product__item__price">₹ 5,000.00</div>
                        <div class="cart_add">
                            <a href="<?php echo url('etios')?>">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/innova.png">
                        <div class="product__label">
                            <span>Innova</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">One Day Trip Packages</a></h6>
                        <div class="product__item__price">₹ 7,500.00</div>
                        <div class="cart_add">
                            <a href="<?php echo url('innova')?>">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/Swift.png">
                        <div class="product__label">
                            <span>Swift</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">One Day Trip Packages</a></h6>
                        <div class="product__item__price">₹ 5,000.00</div>
                        <div class="cart_add">
                            <a href="<?php echo url('swift')?>">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/Tempo-traveller.png">
                        <div class="product__label">
                            <span>Tempo Traveller</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">One Day Trip Packages</a></h6>
                        <div class="product__item__price">₹ 9,500.00</div>
                        <div class="cart_add">
                            <a href="<?php echo url('tempo')?>">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container justify-content-center">
        <h3 class="text-center">PACKAGE DETAILS</h3><br><br>
        <div class="row">
            <div class="col">
                <h3>Included Package</h3><br>
                <div class="star" style="font-size: 17px;">
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Pick and drop – Doorstep pickup and drop(city limits)/railway station/ Airport</p>
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Vehicle Hire for sightseeing as per the Itinerary</p>
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Driver Batta</p>
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Parking charges</p>
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Toll gate charges</p>
                </div>
            </div>
            <div class="col">
                <h3>Excluded Package</h3><br>
                <div class="star" style="font-size: 17px;">
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Entry Fee for tourist attractions</p>
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Multiple pickups (guests need to fix one place of pickup and drop)</p>
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Breakfast, Lunch or anymeal</p>
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Lodging / Accommodation</p>
                    <p><i class="fa fa-star"></i>&nbsp;&nbsp;Guides Payment (If required, guests can book a guide or need to bring a guide on their own)</p>
                </div>
            </div>
        </div>
    </div><br><br><br>

    <div class="container justify-content-center">
        <h3 class="text-center">POPULAR PLACES</h3><br><br>
        <div class="row">
            <div class="col-sm-5">
                <img src="img/george-fort-tour-package.png" width="450" height="450" style="border-radius: 25px; box-shadow: 0px 2px 5px black;">
            </div>
            <div class="col-lg">
                <br>
                <h4>FORT ST.GEORGE</h4>
                <p>Take an excursion back to the British ruling period with the visit to the first stop over of our
                    exciting one day Chennai local sightseeing tour by private cab. Stroll through the celebrated Fort St. George dedicated to the Patron Saint of England, Saint George. Fort played a strategic role in the growth of British trading since its construction in 1644. Well maintained by the Archaeological Survey of India, the Fort is divided as St. Mary’s Church and Fort Museum. An inspiring Fort Museum introduces you to the colonial British era showcasing the relics of the British ruling period. Gaze at the letters written by renowned personnel called Robert Clive and Lord Cornwallis. It also preserves the first ever flown Indian flag post our Independence.</p>
                <p>St. Mary’s Church is one of the oldest Anglican Church constructed by the Britishers in India. The
                    church is also called as Westminster Abbey of the East and stands as an outstanding reminder of the British rule in India. History enthusiasts would be pleased viewing the 150 feet flagstaff made of teakwood. Fort built at a cost of £3000 was attacked by the French and later by Sultan Haider Ali. Fort had two divisions with the White town dwelled by the Europeans and the English while the Black town where the dock workers stayed along with the locals. It accommodates impressive structure called the Wellesley House named after the former Governor General of India. It houses the Tamil Nadu legislative assembly and other official buildings. A ten storied building called the Namakkal Kavignar Maligai is located within the fort campus which holds 30 departments.</p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-5">
                <img src="img/Kapaleeshwar-temple-tour-package-.png" width="450" height="450" style="border-radius: 25px; box-shadow: 0px 2px 5px black;">
            </div>
            <div class="col-lg">
                <br>
                <h4>KAPALEESHWAR TEMPLE</h4>
                <p>Head out to the religious site of Kapaleeswarar Temple with our one day Chennai local sightseeing tour. This auspicious temple enshrines Lord Kapaleeshwarar, a manifestation of Lord Shiva and his consort Goddess Parvati as Karpagambal. According to legends once when Brahma met Lord Shiva in the Kailash, he failed to give due respect to Lord Shiva who in rage cut off one of his head. Lord Brahma then
                    came to this sacred place to do penance and offered his prayers to a Shiva Lingam.</p>
                <p>Legends state that Mylapore got its name from the fact that Goddess Uma worshipped Lord Shiva in the form of Mayil which means peacock in Tamil. She had been cursed and made a peahen as such she had done penance here for returning into her original form. Thus the place got its name from the word Mayil. Devotees can make their way into the sacred complex from two entrances with magnificent
                    gopurams at each entrance. The stunning gopuram at the east entrance rises to a height of 40 m. Travellers would adore the magnificence of the temple built in Dravidian style of architecture in the 7th century.</p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-5">
                <img src="img/thomas-chruch-tour-package.png" width="450" height="450" style="border-radius: 25px; box-shadow: 0px 2px 5px black;">
            </div>
            <div class="col-lg">
                <br>
                <h4>SAINT THOMAS CHURCH</h4>
                <p>Proceeding further with our one day Chennai trip we move to visit one of the most notable religious buildings, the Saint Thomas Church. It is an important pilgrimage site as it is one of the three churches in the world built over the tomb of an apostle of Jesus.</p>
                <p>The most striking features of the church are the stained glass with the images of St. Thomas and other apostles. St. Thomas was also known as the Patron Saint of India for his work in spreading Christianity in the country. He landed in Kerala in A.D 52 and stayed till his martyrdom in A.D. 72.</p>
                <p>This sacred place of worship is a significant Roman Catholic Church which sits on the tomb of St. Thomas. It is the third such church that is built on the tomb of an apostle after that of St. Peter’s Basilica in Vatican City and Santiago de Compostela Cathedral in Spain.</p>
                <p>This religious structure in white was first built by the Portuguese explorers in the 16th century and later rebuilt by the Britishers in 1893. Right side of the main altar is the wooden statue of Mother Mary also called as Mylai Matha.Huge windows with coloured panes and a towering steeple add to the charm of the cathedral. A newly added museum throws light on St. Thomas’ life. It also displays a rare piece of his bone, his fingerprint, an Episcopal chair and the spear that killed him.</p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-5">
                <img src="img/parthasarathy-temple-tour-package.png" width="450" height="450" style="border-radius: 25px; box-shadow: 0px 2px 5px black;">
            </div>
            <div class="col-lg">
                <br>
                <h4>PARTHASARATHY TEMPLE</h4>
                <p>Be thrilled with the next stop over of our one day Chennai local sightseeing tour, the celebrated
                    Parthasarathy temple. Dedicated to Lord Krishna in his manifestation as Lord Parthasarathy, the
                    sacred temple has been praised in Divya Prabandha, the Tamil literature written by the Alvars.
                    One among the 108 Divya Desams dedicated to Lord Vishnu it was built by the Pallavas in the 8th
                    century.</p>
                <p>Dotted with intricate carvings, the gopurams at the entrance greets the visitors. Lord Vishnu appears in the form of Narasimha, Rama, Gajendra Varadaraja, Ranganatha and Krishna. It is one of the oldest temples of the city which also enshrines Goddess Vedavalli Thayar, Swami Manavala Mamunigal, Andal, Hanuman, Alvars and Ramanuja.</p>
                <p>The glorious temple was built by Pallavas, with several modifications done by Cholas and the
                    Vijayanagara kings. Inscriptions about Pallava king, Nandivarman of the 8th century. Pilgrims
                    would be delighted to view the sculptures narrating the different avatars of Lord Vishnu. Word
                    Parthasarathy means the Charioteer of Arjuna in Sanskrit.</p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-5">
                <img src="img/government-museum-tour-package.png" width="450" height="450" style="border-radius: 25px; box-shadow: 0px 2px 5px black;">
            </div>
            <div class="col-lg">
                <br>
                <h4>GOVERNMENT MUSEUM</h4>
                <p>Get acquainted with the history and culture of South India as you visit the prominent Government Museum, the next sightseeing spot of our one day Chennai trip. This second oldest museum of the country is situated near Egmore that spreads over an area of 16.25 acres of land. Established in 1851, the museum is located in the Pantheon complex built during the British period.</p>
                <p>Ramble through the museum halls and admire the historical relics dating back to Chola and Pallava period. It holds six buildings and 46 galleries with displays belonging to diversified areas including numismatics, botany, zoology, natural history, sculptures, palm-leaf manuscripts and archaeology.</p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-5">
                <img src="img/valluvar-kottam-tour-package-1.png" width="450" height="450" style="border-radius: 25px; box-shadow: 0px 2px 5px black;">
            </div>
            <div class="col-lg">
                <br>
                <h4>VALLUVAR KOTTAM</h4>
                <p>Witness the significant monument, the Valluvar Kottam with our one day Chennai local sightseeing tour. It was built by the erstwhile chief minister of the state, Mr. M Karunanidhi in the honour of the famous saint and poet Thiruvalluvar.</p>
                <p>Established in the form of a Temple chariot it was designed by a South Indian architect V.Ganapati Sthapati. Thiruvalluvar was a distinguished poet and philosopher known for his works in Tamil literature. He is remembered for his work known as Thirukkural, which consists of 1330 couplets or Kurals.</p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-5">
                <img src="img/vadapalani-murugan-temple-tour-package.png" width="450" height="450" style="border-radius: 25px; box-shadow: 0px 2px 5px black;">
            </div>
            <div class="col-lg">
                <br>
                <h4>VADAPALANI MURUGAN TEMPLE</h4>
                <p>A real highlight of the full day packed Chennai local tour is the visit to the Vadapalani Murugan Temple. Lord Muruga appears in standing form similar to Palani Andavar. The vividly coloured Rajagopuram adorned with beautiful carvings depicting the stories from the Skanda Purana catches the eye of the visitors.</p>
                <p>Devotees can also worship Varasiddhi Vinayaka, Chokkanathar, Bhairavar, Chandikeshwara, Dakshinamurthy, Goddess Meenakshi and Kali and Lord Bhairavar. Lord Subramanya’s fervent devotee, Annaswamy Nayakar used to worship the lord in a thatched hut at this place.</p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-5">
                <img src="img/marina1.jpg" width="450" height="450" style="border-radius: 25px; box-shadow: 0px 2px 5px black;">
            </div>
            <div class="col-lg">
                <br>
                <h4>MARINA BEACH</h4>
                <p>Last stop of the exciting one day Chennai local sightseeing trip is the Marina Beach that stretches from St George till Besant Nagar. Tourists flock in the place to view the amazing sunrise and sunset. It is a vitalizing experience walking along one of the world’s longest beaches. It is thronged with visitors attracting more than 30000 visitors in a day.</p>
                <p>A majestic beach with few remarkable additions attracts several visitors. A statue of the father of the nation in March to Dandi stride has been set at the beach. Statues of eminent figures like Avvaiyar, Thiruvalluvar, Kambar, Subramania Bharathiyar, Veeramamunivar, Sivaji Ganesan, Kamaraj, G.U Pope, Bharathidasan and Europeans Bishop Caldwell. It has a lighthouse situated on the southern end of the Marina Beach and an aquarium.One day Chennai local sightseeing tour is an exciting
                    expedition of historical and religious sites of this fabulous metropolis city.</p>
            </div>
        </div><br><br>
    </div><br><br><br>

    <!-- One day trip end -->

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
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>