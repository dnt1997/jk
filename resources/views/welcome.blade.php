@extends('layouts.main')
@section('content')
    <!-- MOBILE MENU -->
    <!--HEADER SECTION-->
    <section>
        <div class="tourz-search">
            <div class="container">
                <div class="row">
                    <div class="tourz-search-1">
                        <h1>Plan Your Travel Now!</h1>
                        <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                        <form class="tourz-search-form">
                            <div class="input-field">
                                <input type="text" id="select-city" class="autocomplete">
                                <label for="select-city">Enter city</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                        </form>
                        <div class="tourz-hom-ser">
                            <ul>
                                <li>
                                    <a href="booking-tour-package.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img src="images/icon/2.png" alt=""> Tour</a>
                                </li>
                                <li>
                                    <a href="booking-flight.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1s"><img src="images/icon/31.png" alt=""> Flight</a>
                                </li>
                                <li>
                                    <a href="booking-car-rentals.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img src="images/icon/30.png" alt=""> Car Rentals</a>
                                </li>
                                <li>
                                    <a href="booking-hotel.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="2s"><img src="images/icon/1.png" alt=""> Hotel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--====== HOME HOTELS ==========-->
    <section class="mt-4">
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Popular In <span>India</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Top Rated Places With The Best Experiecne</p>
                </div>
                <!-- CITY -->
                <div class="row">
                <div class="col-md-6">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="images/listing/himachal-front.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con">
                                <h5>Himachal Pradesh</h5>
                                <p cl><span>12 Packages</span> Starting from 14999/- Only</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="tour-details.html">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img"> <img src="images/listing/manali-front.jpg" alt=""> </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Manali</h5>
                                        <p>Starting from 12999/- Only</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="tour-details.html">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img"> <img src="images/listing/ladakh-bike-front.jpg" alt=""> </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Leh-Ladakh</h5>
                                        <p>Starting from 9999/- Only</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="tour-details.html">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img"> <img src="images/listing/darjeeling.jpg" alt=""> </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Darjeeling</h5>
                                        <p>Starting from 8500/- Only</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="tour-details.html">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img"> <img src="images/listing/kerela-front.jpg" alt=""> </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Kerela</h5>
                                        <p>Starting from 10500/- Only</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                     </div>

            </div>
            </div>
        </div>
    </section>
    {{--  --}}
    <section>
        <div class="rows pad-bot-redu tb-space">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Top <span>Out Of India </span>International Packages</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
            </div>
            <div>
                <!-- TOUR PLACE 1 -->
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <!-- OFFER BRAND -->
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="images/listing/dubai-front.jpg" alt="Tour Booking" title="Tour Booking"> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Burj Khalifa<span class="v_pl_name">(Dubai)</span></a></h4>
                        </div>
                        <!-- TOUR ICONS -->
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <!-- OFFER BRAND -->
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="images/listing/paris-front.jpg" alt="Tour Booking" title="Tour Booking"> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Eiffel Tower<span class="v_pl_name">(Paris)</span></a></h4>
                        </div>
                        <!-- TOUR ICONS -->
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"><img src="images/listing/srilanka-front.jpg" alt="Tour Booking" title="Tour Booking"> </div>
                        <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Colombo<span class="v_pl_name">(Srilanka)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"><img src="images/listing/andamin-front.jpg" alt="Tour Booking" title="Tour Booking"> </div>
                        <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Port Blair<span class="v_pl_name">(Andaman)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 5 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"><img src="images/listing/andman-front.jpg" alt="Tour Booking" title="Tour Booking"> </div>
                        <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Krabi 4 Islands <span class="v_pl_name">(Thailand)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 6 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"><img src="images/listing/singapore.jpg" alt="Tour Booking" title="Tour Booking"> </div>
                        <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Universal Studio<span class="v_pl_name">(Singapore)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price"> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location"> </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    {{--  --}}
    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows tb-space">
            <div class="container events events-1" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Out Of India </span>International Packages</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                <table id="myTable">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th class="e_h1">Date</th>
                            <th class="e_h1">Time</th>
                            <th class="e_h1">Location</th>
                            <th>Book</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Taj Mahal,Agra, India</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="images/iplace-2.jpg" alt="" /><a href="hotels-list.html" class="events-title">Salesforce Summer, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="images/iplace-3.jpg" alt="" /><a href="hotels-list.html" class="events-title">God Towers, TOKYO, JAPAN</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">JAPAN</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="images/iplace-4.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE ROMANDIE, Switzerland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Switzerland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="images/iplace-5.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src="images/iplace-6.jpg" alt="" /><a href="hotels-list.html" class="events-title">Future of Marketing,Sydney, Australia</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><img src="images/iplace-7.jpg" alt="" /><a href="hotels-list.html" class="events-title">Eiffel Tower, Paris</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">France</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><img src="images/iplace-8.jpg" alt="" /><a href="hotels-list.html" class="events-title">PARIS - ROUBAIX, England</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">England</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><img src="images/iplace-9.jpg" alt="" /><a href="hotels-list.html" class="events-title">Dubai Beach Resort, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><img src="images/iplace-4.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--====== FOOTER 1 ==========-->
    @endsection
