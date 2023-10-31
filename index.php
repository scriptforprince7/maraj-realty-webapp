<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/tm/reliant/reliant/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 09:42:47 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reliant – Real Estate HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--swiper bundle min css-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons css here-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--icofont min css here-->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--nice select css-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Minified CSS Plugins 
        *************(Please remove the comment from below vendor.min.css and plugins.min.css  for better website load performance and remove all js plugin files from above) 
    -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>

    <style>
        .call-button {
            position: fixed;
            bottom: 36px;
            right: 36px;
            z-index: 2;
        }

        .call-button-icon {
            width: 60px;
            height: 60px;
            background-color: #25d366;
            /* Change the WhatsApp icon background color */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            z-index: 9999;
            /* Higher z-index value to appear above other elements */
        }

        .call-button-icon i {
            font-size: 24px;
            color: #fff;
            /* Change the WhatsApp icon color */
        }

        .call-button-icon:hover {
            background-color: #128C7E;
            /* Change the WhatsApp icon background color on hover */
        }

        @media (max-width: 767px) {
            .call-button {
                right: 10px;
                bottom: 75px;
                z-index: 2;
            }
        }
    </style>


    <div class="call-button" id="callButton">
        <a href="https://api.whatsapp.com/send?phone=919953479017" target="_blank" rel="noopener noreferrer">
            <div class="call-button-icon">
                <i class="fab fa-whatsapp"></i>
            </div>
        </a>
    </div>


    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)">X</a>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li><a href="#"> About</a></li>
                                <li><a href="contact.html"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <!--header area start-->
    <header class="header_area header_seven header_transparent sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header_container d-flex align-items-center">
                        <div class="canvas_open canvas_open7">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                        <div class="header_logo logo7">
                            <a href="index.html"><img width="150px" src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="header_logo logo_sticky">
                            <a href="index.html"><img width="150px" src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu menu_seven">
                            <nav>
                                <ul>
                                    <li><a href="index.html">home</a>
                                    </li>
                                    <li><a href="#"> About</a></li>
                                    <li><a href="properties.html"> Our Amenities </a>
                                    </li>
                                    <li><a href="#">Master Plan</a>
                                    </li>
                                    <li><a href="#">Contact</a>
                                    </li>
                                    <!-- <li><a href="contact.html">Book a Tour</a></li> -->
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                        <div class="header_right_info header_right7">
                            <!-- <div class="login_register">
                                <ul>
                                    <li class="login"><a href="login.html">login</a></li>
                                    <li class="register"><a href="register.html">register</a></li>
                                </ul>
                            </div> -->
                            <div class="add_property">
                                <a href="add-property.html">Book a Tour</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->



    <!--slider area start-->
    <section class="slider_section slider_s_seven">
        <div class="slider_area slick_slider_activation" data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": false,
            "dots": true,
            "autoplay": false,
            "speed": 300,
            "infinite": true}'>
            <div class="single_slider d-flex align-items-end" data-bgimg="assets/img/slider/slide-01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="single_slider_inner">
                                <div class="slider_text slider_text7">
                                    <h3>Luxury Home</h3>
                                    <h1>Glasses de Plaza</h1>
                                    <h2><span>Price: $256874</span></h2>
                                    <a href="#">Read more</a>
                                    Luxury Farmhouses & Farm Plots Near Delhi

                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        .slider-container {
                            position: relative;
                        }

                        .slider-content {
                            float: left;
                            /* width: 50%; */
                            /* padding: 20px; */
                        }

                        .contact-formm {
                            position: absolute;
                            top: 100px;
                            border-radius: 10px;
                            right: 150px;
                            width: 400px;
                            /* Adjust the width of the form */
                            background-color: #545c64af;
                            color: rgba(255, 255, 255, 0.877);
                            padding: 20px 40px;
                            z-index: 2;
                        }


                        /* Additional styling for form elements */
                        /* form {
                            margin-top: 10px;
                        } */

                        label {
                            display: block;
                            margin-top: 10px;
                            margin-bottom: 0px;
                            /* Increase margin for labels */
                            font-weight: bold;
                        }

                        input[type="text"],
                        input[type="email"],
                        textarea {
                            width: calc(100%);
                            /* Adjust the width of input fields */
                            padding: 10px;
                            /* Adjust padding inside input fields */
                            /* margin-bottom: px; */
                            /* Increase margin for input fields */
                            box-sizing: border-box;
                        }

                        input,
                        textarea {
                            background-color: rgba(255, 255, 255, 0.694);
                            border-radius: 10px;
                            border: 1px solid #969fa8;
                        }

                        input[type="submit"] {
                            background-color: #373c40;
                            color: white;
                            padding: 12px 24px;
                            /* Adjust padding inside the submit button */
                            border: none;
                            cursor: pointer;
                            font-size: 16px;
                        }

                        input[type="submit"]:hover {
                            background-color: #353a3d;
                        }

                        @media screen and (max-width: 768px) {
                            .contact-formm {
                                display: none;
                            }

                            .slider-content {
                                float: left;
                                width: 100%;
                                padding: 20px;
                            }
                        }
                    </style>
                    <div class="contact-formm">
                        <h2 style="color: #ffffff; font-size: 1.3rem; font-weight: 900; text-align: center; text-decoration: underline;">
                            Get a call, reach to us!
                        </h2>
                        <form action="upper_form.php" method="post">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required><br>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required><br>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" required></textarea><br><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>

                </div>
            </div>
            <div class="single_slider d-flex align-items-end" data-bgimg="assets/img/slider/slide-02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="single_slider_inner">
                                <div class="slider_text slider_text7">
                                    <h3>Luxury Home</h3>
                                    <h1>Glasses de Plaza</h1>
                                    <h2><span>Price: $256874</span></h2>
                                    <a href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-end" data-bgimg="assets/img/slider/home_07_slider_03.png">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="single_slider_inner">
                                <div class="slider_text slider_text7">
                                    <h3>Luxury Home</h3>
                                    <h1>Glasses de Plaza</h1>
                                    <h2><span>Price: $256874</span></h2>
                                    <a href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="slider-form">
            <div class="contact_form">
                <div class="container">

                    <h3>If you got any questions please don't
                        hesitate to send us a message</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input placeholder="Name" type="text">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input placeholder="Name" type="text">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input placeholder="Email" type="text">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input placeholder="Subject" type="text">
                            </div>
                        </div>
                        <textarea placeholder="Message"></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>

            </div>
        </div>
        <style>
            .slider-form {
                position: absolute;
                top: 0px;
            }

            .slider-form .contact-form {
                width: 100px;
            }
        </style> -->

    </section>
    <!--slider area end-->























    <style>
        /* Styles for the overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        /* Styles for the popup form */
        .popup {
            display: none;
            position: fixed;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
    </style>

    <!-- Button to open the popup -->
    <button id="openButton">Open Popup</button>

    <!-- The overlay and the popup form -->
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">


        <h2>Popup Form</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <button type="submit">Submit</button>
        </form>
        <button id="closeButton">Close</button>
    </div>

    <script>
        const openButton = document.getElementById('openButton');
        const closeButton = document.getElementById('closeButton');
        const overlay = document.getElementById('overlay');
        const popup = document.getElementById('popup');

        openButton.addEventListener('click', function() {
            overlay.style.display = 'block';
            popup.style.display = 'block';
        });

        const closePopup = function() {
            overlay.style.display = 'none';
            popup.style.display = 'none';
        };

        closeButton.addEventListener('click', closePopup);

        overlay.addEventListener('click', function(event) {
            if (event.target === overlay) {
                closePopup();
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                closePopup();
            }
        });
    </script>



































    <!--choose us area start-->
    <div class="choose_us_area choose_seven">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="choose4_section_left wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.5s">
                        <div class="choose_section_thumb">
                            <img src="assets/img/services/services-section4.png" alt="">
                            <div class="choose_shape_img choose_shape5">
                                <img src="assets/img/services/services-shape.png" alt="">
                            </div>
                            <div class="choose_position_text">
                                <span class="properties_price">$256600</span>
                                <h3>Olvia de Paradise</h3>
                                <p>245 West City, Central Town, New York</p>
                                <p>5 Bed - 3 Bath - 1 Garage</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="choose_us_sidebar wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1.5s">
                        <div class="section_titile">
                            <h2>Why Choose Reliant</h2>
                            <p>Pleasure rationally encounter way to find painful
                                very easily from wide range of so you can buy
                                or sale your property...</p>
                        </div>
                        <div class="choose_us_gallery">
                            <div class="choose_list mb-50">
                                <div class="choose_small_thumb">
                                    <img src="assets/img/services/choose1.png" alt="">
                                </div>
                                <div class="choose_text">
                                    <h3>Budget Friendly</h3>
                                    <p>pleasure rationally encounter are
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                            <div class="choose_list mb-50">
                                <div class="choose_small_thumb">
                                    <img src="assets/img/services/choose2.png" alt="">
                                </div>
                                <div class="choose_text">
                                    <h3>Best Locations</h3>
                                    <p>pleasure rationally encounter are
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                            <div class="choose_list">
                                <div class="choose_small_thumb">
                                    <img src="assets/img/services/choose3.png" alt="">
                                </div>
                                <div class="choose_text">
                                    <h3>Trusted by Thousands</h3>
                                    <p>pleasure rationally encounter are
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                            <div class="choose_list">
                                <div class="choose_small_thumb">
                                    <img src="assets/img/services/choose4.png" alt="">
                                </div>
                                <div class="choose_text">
                                    <h3>Financial Support</h3>
                                    <p>pleasure rationally encounter are
                                        anyone who loves or pursues</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--choose us area end-->

    <!--exchange properti area start-->
    <div class="exchange_properti_area mb-138">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section_titile">
                        <h2>It's very Simple way </h2>
                        <p>Pleasure rationally encounter consequences are some of easy
                            way to find extremely painful. Nor again is there anyone</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="exchange_p_container d-flex justify-content-between">
                        <div class="exchange_p_list wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="exchange_p_icon">
                                <img src="assets/img/icon/easy_way-02.png" alt="">
                            </div>
                            <div class="exchange_p_text">
                                <h3>01. Schedule visit</h3>
                                <p>pleasure rationally encounter are
                                    extremely painful. Nor again is there
                                    anyone who loves or pursues</p>
                            </div>
                        </div>
                        <div class="exchange_p_list wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="exchange_p_icon">
                                <img src="assets/img/icon/contact.png" alt="">
                            </div>
                            <div class="exchange_p_text">
                                <h3>01. Schedule visit</h3>
                                <p>pleasure rationally encounter are
                                    extremely painful. Nor again is there
                                    anyone who loves or pursues</p>
                            </div>
                        </div>
                        <div class="exchange_p_list wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="exchange_p_icon">
                                <img src="assets/img/icon/handover.png" alt="">
                            </div>
                            <div class="exchange_p_text">
                                <h3>01. Schedule visit</h3>
                                <p>pleasure rationally encounter are
                                    extremely painful. Nor again is there
                                    anyone who loves or pursues</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--exchange properti area end-->

    <!--luxurious_ nterior area start-->
    <div class="luxurious_interior_area mb-132">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="luxurious_container">
                        <div class="luxurious_bg_shape"></div>
                        <div class="luxurious_header">
                            <div class="luxurious_title">
                                <span>Materials</span>
                                <h2>Luxurious Interior
                                    & Superior Style </h2>
                            </div>
                            <div class="luxurious_desc">
                                <p>Pleasure rationally encounter way to find painful
                                    very easily from wide range of so you can buy
                                    or sale your property...</p>
                            </div>
                            <div class="luxurious_shap1">
                                <img src="assets/img/services/shape_01.png" alt="">
                            </div>
                        </div>
                        <div class="luxurious_slide_wrapper">
                            <div class="luxurious_slider slick_slider_activation" data-slick='{
                                "slidesToShow": 2,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "dots": false,
                                "autoplay": false,
                                "speed": 300,
                                "infinite": true,   
                                "responsive":[  
                                  {"breakpoint":576, "settings": { "slidesToShow": 1 } }  
                                 ]                                                     
                            }'>
                                <div class="luxurious_thumb">
                                    <a href="#"><img src="assets/img/others/luxurious1.png" alt=""></a>
                                </div>
                                <div class="luxurious_thumb">
                                    <a href="#"><img src="assets/img/others/luxurious2.png" alt=""></a>
                                </div>
                                <div class="luxurious_thumb">
                                    <a href="#"><img src="assets/img/others/luxurious1.png" alt=""></a>
                                </div>

                            </div>
                            <div class="luxurious_button">
                                <a href="#">Luxury in touch</a>
                            </div>
                            <div class="luxurious_shap2">
                                <img src="assets/img/services/shape_02.png" alt="">
                            </div>
                            <div class="share_instagram">
                                <p>Share on instragram</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--luxurious interior area end-->

    <!--property amenities area start-->
    <div class="property_amenities_area mb-140">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="amenities_banner">
                        <div class="amenities_thumb one wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s">
                            <img src="assets/img/others/aminities1.png" alt="">
                        </div>
                        <div class="amenities_thumb two wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
                            <img src="assets/img/others/aminities2.png" alt="">
                        </div>
                        <div class="amenities_thumb three wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">
                            <img src="assets/img/others/aminities3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="amenities_sidebar wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1.3s">
                        <div class="section_titile amenities_s_title">
                            <h2>Property Amenities</h2>
                            <p>Pleasure rationally encounter way to find painful
                                very easily or sale your property...</p>
                        </div>
                        <div class="amenities_container">
                            <div class="amenities_checkbox_list">
                                <p><i class="icofont-checked"></i> <span>7 Bedrooms</span></p>
                                <p><i class="icofont-checked"></i> <span>5 Bathrooms</span></p>
                                <p><i class="icofont-checked"></i> <span>Air Conditioning</span></p>
                                <p><i class="icofont-checked"></i> <span>5 Balcony</span></p>
                                <p><i class="icofont-checked"></i> <span>Swimming Pool</span></p>
                                <p><i class="icofont-checked"></i> <span>Security System</span></p>
                            </div>
                            <div class="amenities_checkbox_list">
                                <p><i class="icofont-checked"></i> <span>6 Nearby Schools</span></p>
                                <p><i class="icofont-checked"></i> <span>Gym for Man</span></p>
                                <p><i class="icofont-checked"></i> <span>Dishwasher</span></p>
                                <p><i class="icofont-checked"></i> <span>3 Garaze</span></p>
                                <p><i class="icofont-checked"></i> <span>SCable TV</span></p>
                                <p><i class="icofont-checked"></i> <span>Internet</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--property amenities area end-->

    <!--floor plan area start-->
    <div class="floor_plan_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="floor_plan_content wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.5s">
                        <h2>Floor Plan</h2>
                        <p>Pleasure rationally encounter way to find painful
                            very easily from wide range of so you can buy
                            or sale your property great plan.</p>
                        <p>Pleasure rationally encounter way to find painful
                            very easily from wide range of area</p>
                        <a href="#">View more</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="floor_plan_demo d-flex justify-content-between">
                        <div class="floor_single_demo wow fadeInRight" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="floor_demo_thumb">
                                <img src="assets/img/others/floor-plan1.png" alt="">
                            </div>
                            <div class="floor_number">
                                <p>Ground Floor</p>
                            </div>
                        </div>
                        <div class="floor_single_demo wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="floor_demo_thumb">
                                <img src="assets/img/others/floor-plan1.png" alt="">
                            </div>
                            <div class="floor_number">
                                <p>1st Floor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--floor plan area end-->

    <!--properties area start-->
    <div class="properties_area properties_slide7 properties2 mb-122">
        <div class="container gallery7_container">
            <div class="row">
                <div class="col-lg-6 col-md-6 position-relative">
                    <div class="section_titile">
                        <h2>Visit our Photo Gallery</h2>
                        <p>Pleasure rationally encounter consequences are some of easy
                            way to find extremely painful. Nor again is there anyone</p>
                    </div>
                </div>
            </div>

            <div class="properties_container swiper-banner-gallery">
                <div class=" swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="properties_banner_gallery">
                            <div class="banner_gallery_list">
                                <div class="banner_gallery_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                    <a href="#"><img src="assets/img/bg/banner-gallery1.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                    <a href="#"><img src="assets/img/bg/banner-gallery2.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                                    <a href="#"><img src="assets/img/bg/banner-gallery3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="banner_gallery_list">
                                <div class="banner_gallery_thumb wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                                    <a href="#"><img src="assets/img/bg/banner-gallery4.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.3s">
                                    <a href="#"><img src="assets/img/bg/banner-gallery5.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.3s">
                                    <a href="#"><img src="assets/img/bg/banner-gallery6.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="properties_banner_gallery">
                            <div class="banner_gallery_list">
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery1.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery2.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="banner_gallery_list">
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery4.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery5.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery6.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="properties_banner_gallery">
                            <div class="banner_gallery_list">
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery1.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery2.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="banner_gallery_list">
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery4.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery5.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery6.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="properties_banner_gallery">
                            <div class="banner_gallery_list">
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery1.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery2.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="banner_gallery_list">
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery4.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery5.png" alt=""></a>
                                </div>
                                <div class="banner_gallery_thumb">
                                    <a href="#"><img src="assets/img/bg/banner-gallery6.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!--properties area end-->

    <!--contact our agent area start-->
    <div class="contact_our_agent mb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_agent_left">
                        <div class="contact_agent_thumb">
                            <img src="assets/img/others/agent-person.png" alt="">
                            <div class="contact_agent_number">
                                <p>Phone: <a href="tel:+12456987521"> +12456 987 521</a></p>
                            </div>
                            <div class="contact_agent_email">
                                <p>Email: <a href="mailto:webmaster@example.com">info@sample.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_agent_right">
                        <div class="section_titile">
                            <h2>Contact our Agent</h2>
                            <p>Pleasure rationally encounter way to find painful
                                very easily wide or sale your property...</p>
                        </div>
                        <div class="contact_agent_rank">
                            <h3>Stephen Williamson</h3>
                            <span>Real Estate Agent</span>
                        </div>
                        <div class="contact_agent_form">
                            <form action="#">
                                <div class="contact_agent_input row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input placeholder="First name" type="text">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input placeholder="Last name" type="text">
                                    </div>
                                </div>
                                <div class="contact_agent_input row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input placeholder="Phone no." type="text">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input placeholder="Email Address" type="text">
                                    </div>
                                </div>
                                <div class="contact_agent_textarea">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact our agent area end-->

    <!--testimonial area start-->
    <div class="testimonial_area testimonial_seven mb-132">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_container">
                        <div class="testimonial_bg">
                            <div class="testimonial_slider slick_slider_activation" data-slick='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "dots": true,
                                "autoplay": false,
                                "speed": 300,
                                "infinite": true                                                        
                            }'>
                                <div class="single_testimonial">
                                    <div class="testimonial_content">
                                        <div class="testimonial_icon_img">
                                            <img src="assets/img/icon/quote.png" alt="">
                                        </div>
                                        <div class="testimonial_desc">
                                            <p>"Pleasure rationally encounter way to find painful have some of the
                                                very easily from wide range of so can buy creative more than a great
                                                or sale your dream and your dream happy property" </p>
                                        </div>
                                        <div class="testimonial_thumb_author">
                                            <div class="author_img">
                                                <img src="assets/img/others/image.png" alt="">
                                            </div>
                                            <div class="author_name">
                                                <h3><a href="#">Stephen Gilbard</a></h3>
                                                <span>CEO, Alexo, New York</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_testimonial">
                                    <div class="testimonial_content">
                                        <div class="testimonial_icon_img">
                                            <img src="assets/img/icon/quote.png" alt="">
                                        </div>
                                        <div class="testimonial_desc">
                                            <p>"Pleasure rationally encounter way to find painful have some of the
                                                very easily from wide range of so can buy creative more than a great
                                                or sale your dream and your dream happy property" </p>
                                        </div>
                                        <div class="testimonial_thumb_author">
                                            <div class="author_img">
                                                <img src="assets/img/others/image.png" alt="">
                                            </div>
                                            <div class="author_name">
                                                <h3><a href="#">Stephen Gilbard</a></h3>
                                                <span>CEO, Alexo, New York</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_testimonial">
                                    <div class="testimonial_content">
                                        <div class="testimonial_icon_img">
                                            <img src="assets/img/icon/quote.png" alt="">
                                        </div>
                                        <div class="testimonial_desc">
                                            <p>"Pleasure rationally encounter way to find painful have some of the
                                                very easily from wide range of so can buy creative more than a great
                                                or sale your dream and your dream happy property" </p>
                                        </div>
                                        <div class="testimonial_thumb_author">
                                            <div class="author_img">
                                                <img src="assets/img/others/image.png" alt="">
                                            </div>
                                            <div class="author_name">
                                                <h3><a href="#">Stephen Gilbard</a></h3>
                                                <span>CEO, Alexo, New York</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->

    <!--blog area start-->
    <div class="blog_area blog_seven mb-130">
        <div class="container">
            <div class="section_header">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="section_titile">
                            <h2>Latest Blog Post</h2>
                            <p>Pleasure rationally encounter consequences are some of easy
                                way to find extremely painful. Nor again is there anyone</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3">
                        <div class="view_all_post">
                            <a href="blog.html">View all Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_container slider-gater">
                <div class="row blog_slick slick_slider_activation" data-slick='{
                    "slidesToShow": 3,
                    "slidesToScroll": 1,
                    "arrows": false,
                    "dots": false,
                    "autoplay": false,
                    "speed": 3000,
                    "infinite": true,   
                    "responsive":[
                      {"breakpoint":992, "settings": { "slidesToShow": 2 } },  
                      {"breakpoint":768, "settings": { "slidesToShow": 2 } },  
                      {"breakpoint":400, "settings": { "slidesToShow": 1 } }  
                     ]                                                     
                }'>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog1.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <span>Real estate - 24 June, 2020 - 15 Comments</span>
                                <h3><a href="blog-details.html">How to find investor for your
                                        real estate business startup</a></h3>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog2.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <span>Real estate - 24 June, 2020 - 15 Comments</span>
                                <h3><a href="blog-details.html">How to find investor for your
                                        real estate business startup</a></h3>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog3.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <span>Real estate - 24 June, 2020 - 15 Comments</span>
                                <h3><a href="blog-details.html">How to find investor for your
                                        real estate business startup</a></h3>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog1.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <span>Real estate - 24 June, 2020 - 15 Comments</span>
                                <h3><a href="blog-details.html">How to find investor for your
                                        real estate business startup</a></h3>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog area end-->

    <!--footer area start-->
    <div class="footer_area footer_seven">
        <div class="footer_bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_top">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="index.html"><img src="assets/img/logo/white-logo.png" alt=""></a>
                                </div>
                                <div class="footer_social">
                                    <h4>Follow us</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer_widget">
                                <h3>Address</h3>
                                <div class="footer_location">
                                    <p>358 North Street, Central Town <br>
                                        Glepsy Tower, New York, USA</p>
                                </div>
                            </div>
                            <div class="footer_widget">
                                <h3>Phone</h3>
                                <div class="footer_contact_number">
                                    <a href="tel:+12547898888"> +12547 898 888</a>
                                    <a href="tel:+14587888666"> +14587 888 666</a>
                                </div>
                            </div>
                            <div class="footer_widget">
                                <h3>Web</h3>
                                <div class="footer_contact_mail">
                                    <a href="mailto:webmaster@example.com">info@example.com</a>
                                    <a href="mailto:webmaster@example.com">www.example.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer_middle">
                            <div class="newsletter_container">
                                <div class="newsletter_text">
                                    <h3>Subscribe our Newsletter <br>
                                        get latest updates</h3>
                                </div>
                                <div class="newsletter_form">
                                    <form action="#">
                                        <input placeholder="Enter your email here" type="text">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright_area">
                            <p> <img src="assets/img/others/copyright.png" alt=""> <a href="index.html">Reliant</a>,
                                2022, All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer area end-->

    <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <!--popper min js-->
    <script src="assets/js/vendor/popper.js"></script>
    <!--bootstrap min js-->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--slick min js-->
    <script src="assets/js/slick.min.js"></script>
    <!--swiper bundle min js-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--counterup min js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--waypoints min js-->
    <script src="assets/js/jquery-waypoints.js"></script>
    <!--wow min js-->
    <script src="assets/js/wow.min.js"></script>
    <!--jquery nice select js-->
    <script src="assets/js/jquery.nice-select.js"></script>
    <!--jquery scrollup min js-->
    <script src="assets/js/jquery.scrollup.min.js"></script>
    <!--ajax mail js-->
    <script src="assets/js/ajax-mail.js"></script>
    <!--mailchimp ajax js-->
    <script src="assets/js/mailchimp-ajax.js"></script>

    <!-- Minified JS Plugins 
    *************(Please remove the comment from below vendor.min.js and plugins.min.js  for better website load performance and remove all js plugin files from above) 
-->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script> -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from htmldemo.net/tm/reliant/reliant/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 09:44:22 GMT -->

</html>