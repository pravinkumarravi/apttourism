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
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" href="booking.css/font-awesome.min.css">
    <link rel="stylesheet" href="booking.css/style.minified.css">
    <link rel="stylesheet" href="booking.css/main.css">
    <link rel="stylesheet" href="booking.css/padmavathy.css">
    <link rel="stylesheet" href="booking.css/roboto.css">
    <link rel="stylesheet" type="text/css" href="booking.css/jquery.yacal.css">
    <link rel="stylesheet" href="booking.css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="booking.css/bookreg.css">
    <link rel="stylesheet" href="booking.css/style1.css">
    <link rel="stylesheet" href="booking.css/input.css">
    <link rel="stylesheet" href="booking.css/jquery-ui.css">
    <link rel="stylesheet" href="fonts/icon">


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-2.2.4.min.js"></script>

    <style>
        .quality p {
            color: black;
            text-decoration: none;
            margin-bottom: 0;
            font-size: 18px;
            background: #fff;
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

        .ui-datepicker-unselectable .ui-state-disabled .undefined .ui-state-default {
            opacity: .35;
            filter: Alpha(Opacity=35);
            background-image: none;
            background: red !important;
        }

        .ui-state-disabled .ui-state-default {
            border: 1px solid #c5c5c5;
            background: red !important;
            font-weight: normal;
            color: white !important;
        }

        .ui-state-default {
            border: 1px solid #c5c5c5;
            background: green !important;
            font-weight: normal;
            color: white !important;
        }

        .ui-state-disabled,
        .ui-widget-content .ui-state-disabled,
        .ui-widget-header .ui-state-disabled {
            opacity: 1 !important;
            filter: Alpha(Opacity=35);
            background-image: none;
        }

        .ui-datepicker-inline {
            margin-left: auto;
            margin-right: auto;
            width: 79%;
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
                            <li class="active"><a href="<?php echo url('/') ?>">Home</a></li>
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

    <main id="main" class="site-content"><br>

        <h2 class="justify-content-center text-center">Booking Process</h2><br>


        <div class="container-fluid">

            <div class="row">


                <div class="col-md-12 col-sm-12 col-xs-12 calendar">


                    <section style="background:#efefe9;">
                        <div class="board">
                            <div class="board-inner">
                                <ul class="nav nav-tabs" id="myTab">
                                    <div class="liner"></div>

                                    <li class="active">
                                        <a href="step1" data-toggle="tab" title="Date &amp; Timings" style="cursor: pointer;" id="one">
                                            <span class="round-tabs one">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li><a href="#step2" data-toggle="tab" title="Informations" style="cursor: pointer;" id="two">
                                            <span class="round-tabs two">
                                                <i class="fa fa-car" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li><a href="#step3" data-toggle="tab" title="Details" style="cursor: pointer;" id="three">
                                            <span class="round-tabs three">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span> </a>
                                    </li>
                                    <li><a href="#step4" data-toggle="tab" title="Payment" style="cursor: pointer;" id="four">
                                            <span class="round-tabs four">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </span> </a>
                                    </li>

                                </ul>
                            </div>




                            <div class="tab-content">
                                <div class="tab-pane fade" id="step2">

                                    <div class="col-md-offset-1 col-sm-12 col-xs-12">
                                        <div id="ttdCalendar" style="display: none"></div>


                                        <div class="col-md-5 size" id="darshandd">
                                            <div class="form-group row">
                                                <label for="name" id="JourneyDateLabel" class="active">Darshan Date</label>
                                                <input type="date" class="form-control" id="JourneyDate" placeholder="Darshan Date" required="required" name="JourneyDate">



                                                <label for="person" class="active" style="float:left;">Email Address</label>
                                                <input type="email" required="required" name="Email" id="Email" value="" class="form-control" placeholder="Enter Email">






                                                <label for="person" class="active" style="float:left;">Whatsapp-Mobile Number</label>
                                                <input type="number" required="required" name="optMobileNo" id="optMobileNo" value="" class="form-control" placeholder="Enter Mobile No">


                                            </div>
                                        </div>
                                        <div class="col-md-1 size">
                                        </div>
                                        <div class="col-md-5 size">
                                            <div class="form-group row">
                                                <label for="name" class="active">Darshan Time</label>
                                                <select class="form-control" data-val="true" name="time" id="time" required="">
                                                    <option disabled="disabled">Select Darshan Time</option>
                                                    <option value="7">09.00 AM</option>
                                                    <option value="8">10:00 AM</option>
                                                    <option value="9">11:00 AM</option>
                                                    <option value="10">12:00 PM</option>
                                                    <option value="11">01.00 PM</option>
                                                    <option value="12">02.00 PM</option>
                                                    <option value="13">03.00 PM</option>
                                                    <option value="14">04.00 PM</option>
                                                    <option value="15">05.00 PM</option>
                                                    <option value="16">06.00 PM</option>
                                                </select><br>


                                                <label for="person" class="active" style="float:left;">Phone Number</label>
                                                <input type="number" required="required" name="MobileNo" id="MobileNo" value="" class="form-control" placeholder="Enter Mobile No">
                                                <label for="person" class="active" style="float:left;">Pickup Address</label>
                                                <input type="text" required="required" name="address" id="address" value="" class="form-control" placeholder="Enter Address">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-right" style="margin-right:20px;margin-bottom:0px;text-indent: 0px;">
                                        <a href="#step1" class="btn btn-success  text-center" data-toggle="tab" id="prev" title="Informations" style="float:left;margin-left:15px; background: #0044cc !important;border-color: #0044cc !important;"> <i class="fa fa-backward">&nbsp;</i> Previous <span style="margin-left:10px;"></span></a>
                                        <a href="#step3" class="btn btn-success text-center" data-toggle="tab" id="Continue" title="Informations" style="background: #0044cc !important;border-color: #0044cc !important;"><i class="fa fa-forward">&nbsp;</i> Next <span style="margin-left:10px;"></span></a>
                                    </p>
                                </div><br>


                                <div class="tab-pane fade in active" id="step1">
                                    <div class="row">

                                        <div class="col-xs-12">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                                <a href="booking300.html"><input type="radio" name="ticket_type" id="ticket_type" ng-model="myvar" value="300" checked="" onclick="">

                                                    <strong> Rs.300 Darshan Ticket</strong></a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="booking500.html"><input type="radio" name="ticket_type" id="ticket_type" ng-model="myvar" value="500" onclick="">
                                                    <strong> Rs.500 Darshan Ticket</strong></a>
                                            </div>

                                            <div class="col-md-12">
                                                <p style="text-align: center;margin-top: 36px;color: red;font-weight: bold;">Before Booking Tirupati Tour Package Please call us +91 - 86087 99991 for ticket availability</p>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 size">

                                                <ul class="collapsible style2" data-collapsible="accordion">
                                                    <li class="active">

                                                        <div class="collapsible-header active">





                                                            <i class="fa fa-chevron-down"></i>
                                                            <i class="fa fa-chevron-up close"></i>
                                                            TOYOTA INNOVA A/C
                                                        </div>
                                                        <input type="hidden" name="priceless" id="priceless">
                                                        <div class="collapsible-body" style="display: block;">

                                                            <h4>300 Package</h4><br>
                                                            <h5>One Day Tirupati Tour Package From Chennai</h5><br>
                                                            <label><input type="radio" name="price" id="price" value="11000" onclick="fnDrawtable(4)"> 4 person -Cost Rs.11000</label><br>
                                                            <label><input type="radio" name="price" id="price" value="12000" onclick="fnDrawtable(5)"> 5 person -Cost Rs.12000</label><br>
                                                            <label><input type="radio" name="price" id="price" value="13000" onclick="fnDrawtable(6)"> 6 person -Cost Rs.13000</label><br>
                                                            <label><input type="radio" name="price" id="price" value="14500" onclick="fnDrawtable(7)"> 7 person -Cost Rs.14500</label><br>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-md-10 hidden-xs  " id="center" style="background-color:#e7cece;">
                                                                    <p><br>1. Above all tirupati car packages includes Rs 300/- Special Entry Darshan Ticket, BreakFast &amp; Lunch</p>

                                                                    <p>2. Includes One Lattu Prasatham per Special Entry Ticket</p>

                                                                    <p>3. Includes Tollgate, Car Parking, Driver Beta, Andhra Permit Tax &amp; Diesel Charges
                                                                    </p>
                                                                    <p>4. Covering Temples - Tirupati Tirumala Balaji and Alamelumangapuram (Padmavathy) Temples</p>

                                                                    <p>5. We are guide darshan counter, tonsure (Mottai), Thulaparam and etc Note : The Above Packages Not including Kalahasti Temple so If you want Kalahasti temple, Additional charges Applicable</p>

                                                                    <p>6. If you have Children below 11 years old age, not need rs 300 darshan tickets for Children and the above packages not included food, If you want additional charges Rs 200/-</p><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>

                                                        <div class="collapsible-header">





                                                            <i class="fa fa-chevron-down"></i>
                                                            <i class="fa fa-chevron-up close"></i>
                                                            ETIOS / SWIFT DESIRE A/C
                                                        </div>
                                                        <div class="collapsible-body">
                                                            <p>Before Booking Tirupati Tour Package Please call us +91 - 86087 99991 for ticket availability</p><br>
                                                            <h4>300 Package</h4><br>
                                                            <h5>One Day Tirupati Tour Package From Chennai</h5><br>
                                                            <label><input type="radio" name="price" id="price" value="10500" onclick="fnDrawtable(4)"> 4 person Person-Cost Rs.10500</label><br>
                                                            <label><input type="radio" name="price" id="price" value="8000" onclick="fnDrawtable(2)"> 2 person Person-Cost Rs.8000</label><br>
                                                            <label><input type="radio" name="price" id="price" value="9200" onclick="fnDrawtable(3)"> 3 Person Person-Cost Rs.9200</label><br>
                                                            <label><input type="radio" name="price" id="price" value="6700" onclick="fnDrawtable(1)"> 1 Person Person-Cost Rs.6700</label><br>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-md-10 hidden-xs" id="center" style="background-color:#e7cece;">
                                                                    <p><br>1. Above all tirupati car packages includes Rs 300/- Special Entry Darshan Ticket, BreakFast &amp; Lunch</p>

                                                                    <p>2. Includes One Lattu Prasatham per Special Entry Ticket</p>

                                                                    <p>3. Includes Tollgate, Car Parking, Driver Beta, Andhra Permit Tax &amp; Diesel Charges
                                                                    </p>
                                                                    <p>4. Covering Temples - Tirupati Tirumala Balaji and Alamelumangapuram (Padmavathy) Temples</p>

                                                                    <p>5. We are guide darshan counter, tonsure (Mottai), Thulaparam and etc Note : The Above Packages Not including Kalahasti Temple so If you want Kalahasti temple, Additional charges Applicable</p>

                                                                    <p>6. If you have Children below 11 years old age, not need rs 300 darshan tickets for Children and the above packages not included food, If you want additional charges Rs 200/-</p><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>

                                                        <div class="collapsible-header">





                                                            <i class="fa fa-chevron-down"></i>
                                                            <i class="fa fa-chevron-up close"></i>
                                                            INNOVA CRYSTA A/C
                                                        </div>
                                                        <div class="collapsible-body">
                                                            <p>Before Booking Tirupati Tour Package Please call us +91 - 86087 99991 for ticket availability</p><br>
                                                            <h4>300 Package</h4><br>
                                                            <h5>One Day Tirupati Tour Package From Chennai</h5><br>
                                                            <label><input type="radio" name="price" id="price" value="14000" onclick="fnDrawtable(4)"> 4 person Person-Cost Rs.14000</label><br>
                                                            <label><input type="radio" name="price" id="price" value="15200" onclick="fnDrawtable(5)"> 5 person Person-Cost Rs.15200</label><br>
                                                            <label><input type="radio" name="price" id="price" value="16500" onclick="fnDrawtable(6)"> 6 person Person-Cost Rs.16500</label><br>
                                                            <label><input type="radio" name="price" id="price" value="18000" onclick="fnDrawtable(7)"> 7 person Person-Cost Rs.18000</label><br>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-md-10 hidden-xs" id="center" style="background-color:#e7cece;">
                                                                    <p><br>1. Above all tirupati car packages includes Rs 300/- Special Entry Darshan Ticket, BreakFast &amp; Lunch</p>

                                                                    <p>2. Includes One Lattu Prasatham per Special Entry Ticket</p>

                                                                    <p>3. Includes Tollgate, Car Parking, Driver Beta, Andhra Permit Tax &amp; Diesel Charges
                                                                    </p>
                                                                    <p>4. Covering Temples - Tirupati Tirumala Balaji and Alamelumangapuram (Padmavathy) Temples</p>

                                                                    <p>5. We are guide darshan counter, tonsure (Mottai), Thulaparam and etc Note : The Above Packages Not including Kalahasti Temple so If you want Kalahasti temple, Additional charges Applicable</p>

                                                                    <p>6. If you have Children below 11 years old age, not need rs 300 darshan tickets for Children and the above packages not included food, If you want additional charges Rs 200/-</p><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>

                                                        <div class="collapsible-header">





                                                            <i class="fa fa-chevron-down"></i>
                                                            <i class="fa fa-chevron-up close"></i>
                                                            TEMPO TRAVELLER A/C
                                                        </div>
                                                        <div class="collapsible-body">
                                                            <p>Before Booking Tirupati Tour Package Please call us +91 - 86087 99991 for ticket availability</p><br>
                                                            <h4>300 Package</h4><br>
                                                            <h5>One Day Tirupati Tour Package From Chennai</h5><br>
                                                            <label><input type="radio" name="price" id="price" value="24000" onclick="fnDrawtable(9)"> 9 person Person-Cost Rs.24000</label><br>
                                                            <label><input type="radio" name="price" id="price" value="25500" onclick="fnDrawtable(10)"> 10 person Person-Cost Rs.25500</label><br>
                                                            <label><input type="radio" name="price" id="price" value="26500" onclick="fnDrawtable(11)"> 11 person Person-Cost Rs.26500</label><br>
                                                            <label><input type="radio" name="price" id="price" value="27800" onclick="fnDrawtable(12)"> 12 person Person-Cost Rs.27800</label><br>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-md-10 hidden-xs" id="center" style="background-color:#e7cece;">
                                                                    <p><br>1. Above all tirupati car packages includes Rs 300/- Special Entry Darshan Ticket, BreakFast &amp; Lunch</p>

                                                                    <p>2. Includes One Lattu Prasatham per Special Entry Ticket</p>

                                                                    <p>3. Includes Tollgate, Car Parking, Driver Beta, Andhra Permit Tax &amp; Diesel Charges
                                                                    </p>
                                                                    <p>4. Covering Temples - Tirupati Tirumala Balaji and Alamelumangapuram (Padmavathy) Temples</p>

                                                                    <p>5. We are guide darshan counter, tonsure (Mottai), Thulaparam and etc Note : The Above Packages Not including Kalahasti Temple so If you want Kalahasti temple, Additional charges Applicable</p>

                                                                    <p>6. If you have Children below 11 years old age, not need rs 300 darshan tickets for Children and the above packages not included food, If you want additional charges Rs 200/-</p><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="form-group">
                                                    <!--<a href="#step2" class="btn btn-success prevBtn tab-pane pull-left" style="background: #0044cc !important;border-color: #0044cc !important;" data-toggle="tab"><i class="fa fa-backward">&nbsp;</i> Previous <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>-->
                                                    <a href="#step2" class="btn btn-success nextBtn  pull-right" data-toggle="tab" id="second" style="background: #0044cc !important;border-color: #0044cc !important;"><i class="fa fa-forward">&nbsp;</i> Next <span style="margin-left:10px;"></span></a><br><br>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <p style="color: red;margin-left:20px;text-align:center;">Note*: <b>No need to book ticket for children below 11 years</b></p>
                                    <br>
                                </div>


                                <div class="tab-pane fade" id="step3">
                                    <div class="row" style="margin-left: 40px; margin-right: 10px;">
                                        <div class="col-xs-12">
                                            <div class="col-md-12" style="margin-left: -13px;">
                                                <h4> Passenger Information</h4>
                                                <p id="selectdate" style="color: red;margin-top: 10px;"></p>
                                                <p id="car_pack" style="color: red;margin-left: 13px;"></p>
                                                <input type="hidden" name="carrr_pack" id="carrr_pack">
                                                <p id="perdetail" style="color: red;"></p>


                                            </div>

                                            <div class="col-md-5 col-sm-12" id="newform">
                                                <div class="form-group row">




                                                    <label for="person" class="" style="float:left;">Tonsure or Mottai</label>
                                                    <select class="form-control" data-val="true" name="tonsure" id="tonsure" required="">
                                                        <option disabled="disabled">Select </option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select><br>



                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12" id="newform">
                                                <div class="form-group row">




                                                    <label for="person" class="" style="float:left;">Ear Piercing</label>
                                                    <select class="form-control" data-val="true" name="earpier" id="earpier" required="">
                                                        <option disabled="disabled">Select </option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select><br>



                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12" id="newform">

                                                <div class="form-group row">




                                                    <label for="person" class="" style="color:red;">Pickup Time Charges&nbsp;
                                                    </label><i class="fa fa-question-circle" id="myBtn" style="color:black;" aria-hidden="true"></i>


                                                    <br><span><input type="radio" id="timer" name="timer" value="12.30 am to 3.00am - Rs.500/- Batta" onclick="pickuptimecharges(500)">
                                                        <label for="time">12.30 am to 3.00am - Rs.500/- Batta</label></span><br>
                                                    <span><input type="radio" id="timer" name="timer" value="4.00 am to 11.00pm - Free Pickup" onclick="pickuptimecharges1(0)">
                                                        <label for="time1">4.00 am to 11.00pm - Free Pickup</label></span><br>




                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12" id="newform">
                                                <div class="form-group row">
                                                    <label for="person" class="" style="color:red;">Food&nbsp;
                                                    </label><i class="fa fa-question-circle" id="myBtn2" style="color:black;" aria-hidden="true"></i>
                                                    <span><br><input type="radio" id="wfood" name="food" value="No Food" onclick="nofood()">
                                                        <label for="wfood">No Food</label></span><br>
                                                    <span><input type="radio" id="wfood" name="food" value="With Food" onclick="withfood()">
                                                        <label for="wofood">Package Food</label></span><br>
                                                    <input type="hidden" name="lessamount" id="lessamount">
                                                    <input type="hidden" name="lflamount" id="lflamount">
                                                    <input type="hidden" name="lessamnt" id="lessamnt">
                                                    <select name="chfoodvalue" class="form-control" required="" style="display:none" id="chfoodvalue" onchange="withfoodchildren(this.value)">


                                                        <option disabled="disabled" selected="selected">Select</option>
                                                        <option value="200">1 Children - Rs.200</option>
                                                        <option value="400">2 Children - Rs.400</option>
                                                        <option value="600">3 Children - Rs600</option>
                                                        <option value="800">4 Children - Rs.800</option>
                                                        <option value="1000">5 Children - Rs.1000</option>

                                                        <option value="0">No Children</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12" id="newform">
                                                <div class="form-group row">
                                                    <label for="person" class="" style="color:red;">Pickup Point&nbsp;
                                                    </label><i class="fa fa-question-circle" id="myBtn3" style="color:black;" aria-hidden="true"></i><br>

                                                    <span><input type="radio" id="pick" name="pickup" value="01 - FREE PICKUP" onclick="free()">
                                                        <label for="pick"> Pickup Point : 01 - FREE PICKUP</label></span><br>
                                                    <span><input type="radio" id="pick" name="pickup" value="02 - Based on KMS" onclick="kms()">
                                                        <label for="pick1"> Pickup Point : 02 - Based on KMS</label></span><br>
                                                    <input type="hidden" name="lessamnt1" id="lessamnt1">

                                                    <select name="pipntvalue" class="form-control" required="" id="pipntvalue" style="display:none" onchange="pipntvalueamnt(this.value)">
                                                        <option disabled="disabled" selected="selected">Select</option>
                                                        <option value="500">01 - 05 KMS -- 500</option>

                                                        <option value="800">06 - 10 KMS -- 800</option>

                                                        <option value="1200">11 - 15 KMS -- 1200</option>

                                                        <option value="1600">16 - 20 KMS -- 1600</option>

                                                        <option value="2500">21 - 25 KMS -- 2500</option>

                                                    </select>
                                                </div>
                                            </div><br>
                                            <br>
                                            <div class="col-md-12 col-sm-12" id="newform2">

                                                <p style="color:red;">&nbsp;&nbsp;*We offers free service for Pickup &amp; Drop in within the city limit, For outside city limit , Additional Charges will be collected.</p>
                                            </div><br>

                                            <input type="hidden" name="pay_ladd" id="pay_ladd" value="50">
                                            <div class="col-md-5 col-sm-12" id="newform">
                                                <div class="form-group row">
                                                    <label for="person" class="" style="float:left;">Extra Laddus</label>

                                                    <select class="form-control" data-val="true" name="laddus" id="laddus" required="" onchange="extraladdus(this.value,50)">
                                                        <option value="" disabled="disabled" selected="selected">Select Extra Laddus</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>

                                                    </select>



                                                </div>
                                            </div>


                                            <div class="col-md-5 col-sm-12" id="newform">
                                                <div class="form-group row" id="citis_container">




                                                    <label for="person" class="" style="float:left;">PickUp Charges</label>
                                                    <select class="form-control" data-val="true" name="pickup_chargeamnt" id="pickup_chargeamnt" required="" onchange="getpickup_chargeamnt(this)">
                                                        <option value="pick">Charges</option>
                                                        <option value="30">With in city limit , ( 0 )</option>
                                                        <option value="31">With in city limit , ( 0 )</option>
                                                        <option value="33">With in city limit , ( 0 )</option>
                                                        <option value="34">With in city limit , ( 0 )</option>
                                                        <option value="35">With in city limit , ( 0 )</option>
                                                        <option value="36">With in city limit , ( 0 )</option>
                                                        <option value="37">Thuraipakkam, OMR , ( 300 )</option>
                                                        <option value="38">Thuraipakkam, OMR , ( 400 )</option>
                                                        <option value="39">Thuraipakkam, OMR , ( 500 )</option>
                                                        <option value="40">Thuraipakkam, OMR , ( 500 )</option>
                                                        <option value="41">Thuraipakkam, OMR , ( 700 )</option>
                                                        <option value="42">Thuraipakkam, OMR , ( 700 )</option>
                                                        <option value="43">Navalur , ( 500 )</option>
                                                        <option value="44">Navalur , ( 500 )</option>
                                                        <option value="45">Navalur , ( 600 )</option>
                                                        <option value="46">Navalur , ( 500 )</option>
                                                        <option value="47">Navalur , ( 800 )</option>
                                                        <option value="48">Navalur , ( 800 )</option>
                                                    </select><br>

                                                    <br><br>

                                                </div>
                                            </div>









                                            <div id="custTable" class="no-more-tables" style="display:none">
                                                <table width="100%" id="MainTable" class="table table-striped table-bordered" style="width: 91%;  margin-left: 5px;">
                                                    <thead>
                                                        <tr style="background-color:yellow;color:black;">
                                                            <th width="5%">No</th>
                                                            <th width="20%">Name</th>
                                                            <th width="7%">Age</th>
                                                            <th width="15%">Gender</th>
                                                            <th width="20%">Proof</th>
                                                            <th width="25%">Proof No</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="noOfTickets">
                                                        <tr>
                                                            <td class="center">1</td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="Name1" name="Name[]" type="text" class="form-control col-md-4" placeholder="Name"></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="Age1" name="Age[]" type="text" onkeypress="return isNumber(event)" onchange="checkNumber(this)" class="form-control" placeholder="Age"></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><select required="required" id="Gender1" name="Gender[]" class="form-control">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><select required="required" id="Proof1" name="Proof[]" class="form-control proof">
                                                                        <option value="Aadhaar Card">Aadhaar Card</option>
                                                                        <option value="Voter Id">Voter Id</option>
                                                                        <option value="Passport Number">Passport Number</option>
                                                                    </select></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="ProofNo1" type="text" class="form-control" name="ProofNo[]" placeholder="Proof No"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">2</td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="Name2" name="Name[]" type="text" class="form-control col-md-3" placeholder="Name"></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="Age2" name="Age[]" type="text" onkeypress="return isNumber(event)" onchange="checkNumber(this)" class="form-control" placeholder="Age"></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><select required="required" id="Gender2" name="Gender[]" class="form-control">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><select required="required" id="Proof2" name="Proof[]" class="form-control proof">
                                                                        <option value="Aadhaar Card">Aadhaar Card</option>
                                                                        <option value="Voter Id">Voter Id</option>
                                                                        <option value="Passport Number">Passport Number</option>
                                                                    </select></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="ProofNo2" type="text" class="form-control" name="ProofNo[]" placeholder="Proof No"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">3</td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="Name3" name="Name[]" type="text" class="form-control col-md-3" placeholder="Name"></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="Age3" name="Age[]" type="text" onkeypress="return isNumber(event)" onchange="checkNumber(this)" class="form-control" placeholder="Age"></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><select required="required" id="Gender3" name="Gender[]" class="form-control">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><select required="required" id="Proof3" name="Proof[]" class="form-control proof">
                                                                        <option value="Aadhaar Card">Aadhaar Card</option>
                                                                        <option value="Voter Id">Voter Id</option>
                                                                        <option value="Passport Number">Passport Number</option>
                                                                    </select></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"><input required="required" id="ProofNo3" type="text" class="form-control" name="ProofNo[]" placeholder="Proof No"></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12" id="newform1">
                                                <div class="col-md-3 col-sm-12">
                                                    <label for="person" class="" style="color:red;">Payment Type :
                                                    </label><br>
                                                </div>
                                                <div class="col-md-3 col-sm-12" style="    margin-left: 8px;">


                                                    <span><input type="radio" id="paymentcost" name="payment" value="Full Payment Cost">
                                                        <label for="paymentcost" id="paymentcost2"> Full Payment Cost Rs </label><span style="font-weight:bold;">/-</span></span>



                                                </div>
                                                <div class="col-md-3 col-sm-12" style="margin-left: 5px;">
                                                    <span><input type="radio" id="paymentcost" name="payment" value="Advance Payment Cost">
                                                        <label for="paymentcost1" id="paymentcost1"> Advance Payment Cost Rs.</label><span style="font-weight:bold;">/-</span></span>


                                                </div><br><br><br>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <input type="hidden" name="tempac" id="tempac">
                                                <input type="hidden" name="pickuptimechargesrate" id="pickuptimechargesrate">
                                                <input type="hidden" name="pick_idrate" id="pick_idrate">
                                                <input type="hidden" name="pipntvalueamntrate" id="pipntvalueamntrate">
                                                <input type="hidden" name="fullamount" id="fullamount" value="0">
                                                <input type="hidden" name="full_amount" id="full_amount">
                                                <input type="hidden" name="ticketamount" id="ticketamount" value="300">
                                                <input type="hidden" name="packagefood" id="packagefood">
                                                <input type="hidden" name="servicscharge" id="servicscharge">
                                                <input type="checkbox" name="temple" id="temple" style="width: 18px;height: 15px;"><label style="font-size:14px;color: red;margin-left: 10px;">Select Additional Temple Package</label>
                                                <div class="chbx" style="display:none">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="150" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Chennai Airport Pick-up(Rs.150)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="50" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Central / Egmore Pick-up(Rs.50)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="1200" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Sri Kalahasti Temple(Rs.1200)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="2500" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> vellore Golden Temple(Rs.2500)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="800" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Tiruttani Murugan Temple(Rs.800)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="1200" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Tirumala Sightseeing Papavinasam / Jabali Theertham / Sila Thoranam / Akasa ganga(Rs.1200)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="1000" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Sri Kalyana Venkateswara Temple, Srinivasa Mangapuram(Rs.1000)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="500" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Tirupati Govindaraja Temple(Rs.500)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="300" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Tirupati Iskon Temple(Rs.300)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="300" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Kapila Theertham Temple(Rs.300)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="500" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Narayanavanam venkateswara Temple(Rs.500)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="800" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Sri Pallikondeshwara Temple, Surutapalli(Rs.800)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="800" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Sri Vedanarayana Temple, Nagalapuram(Rs.800)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="500" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Sri Venkateshwara National Park(Rs.500)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="500" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Sri Prasanna Venkateswara Temple, Appalayagunta(Rs.500)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="2000" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Varasidhi Vinayaka Temple, Kanipakkam(Rs.2000)</label><br>
                                                    <input type="checkbox" id="vehicle1" name="vehicle1[]" value="500" style="width: 18px;height: 15px;">

                                                    <label for="vehicle1" id="vehicle2" name="vehicle2[]"> Veera Raghavar Perumal Temple, Thiruvallur(Rs.500)</label><br>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <a href="#step3" class="btn btn-success prevBtn  pull-left" data-toggle="tab" style="background: #0044cc !important;border-color: #0044cc !important;"><i class="fa fa-backward">&nbsp;</i> Previous <span style="margin-left:10px;"></span></a>
                                                <a href="#step4" class="btn btn-success nextBtn  pull-right" data-toggle="tab" id="third" style="background: #0044cc !important;border-color: #0044cc !important;"><i class="fa fa-forward">&nbsp;</i> Next <span style="margin-left:10px;"></span></a>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-pane fade" id="step4">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-md-12" id="contentConfirm">
                                            </div>
                                            <div class="col-md-12" id="clonetable">
                                            </div>
                                            <div class="col-md-12" id="contentPackage">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="checkbox-inline">
                                                    <input name="Confirmation" type="checkbox" id="Confirmation" style="width: 7%;margin-top: -2px;">
                                                    <a style="color:brown;" href="<?php echo url('terms_and_condition') ?>">I agreed Terms &amp; Conditions.</a>
                                                </label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <a href="step3" class="btn btn-success prevBtn pull-left" data-toggle="tab">
                                                    <i class="fa fa-backward">&nbsp;</i> Previous <span style="margin-left:10px;"></span>
                                                </a>
                                                <a class="pull-right" href="{{ route('payment') }}">
                                                    <img src="img/pay-now.png">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.minified.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/yacal.js"></script>
    <script type="text/javascript" src="js/package.js"></script>
    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.yacal.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        //second button
        var modal1 = document.getElementById("myModal1");

        // Get the button that opens the modal
        var btn1 = document.getElementById("myBtn2");

        // Get the <span> element that closes the modal
        var span1 = document.getElementsByClassName("close1")[0];

        // When the user clicks the button, open the modal 
        btn1.onclick = function() {
            modal1.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span1.onclick = function() {
            modal1.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal1.style.display = "none";
            }
        }
        //third button


        var modal2 = document.getElementById("myModal2");

        // Get the button that opens the modal
        var btn2 = document.getElementById("myBtn3");

        // Get the <span> element that closes the modal
        var span2 = document.getElementsByClassName("close2")[0];

        // When the user clicks the button, open the modal 
        btn2.onclick = function() {
            modal2.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span2.onclick = function() {
            modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal2.style.display = "none";
            }
        }

        function getjournydate() {
            var window_size = window.matchMedia(('max-width: 425px)'));
            if (window.matchMedia('(max-width: 768px)').matches) {

                $("#datepicker").show();
            } else {

                $("#ttdCalendar").show();
                var ydate = $("#JourneyDate").val();
                if (ydate != "") {
                    $("#ttdCalendar").hide();
                }
            }

        }
    </script>
    <div class="hiddendiv common"></div>
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
    <!-- Testimonial Section Begin -->
    <section class="testimonial spad" style="background: #fff">
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>