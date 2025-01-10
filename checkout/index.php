<?php

include('../server/connection.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Acuasafe - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="<?php echo $domain ?>assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?php echo $domain ?>assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/flaticon.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/owl.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/nice-select.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/color.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/style1.css" rel="stylesheet">
    <link href="<?php echo $domain ?>assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- main header -->
        <header class="main-header">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="shape" style="background-image: url(<?php echo $domain ?>assets/images/shape/shape-1.png);"></div>
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index-2.html"><img src="<?php echo $domain ?>assets/images/logo.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home Page 01</a></li>
                                            <li><a href="index-3.html">Home Page 02</a></li>
                                            <li><a href="index-4.html">Home Page 03</a></li>
                                            <li><a href="index-onepage.html">OnePage Home</a></li>
                                            <li><a href="index-rtl.html">RTL Home</a></li>
                                            <li class="dropdown"><a href="index-2.html">Header Style</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style 01</a></li>
                                                    <li><a href="index-4.html">Header Style 02</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Pages</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="gallery.html">Gallery One</a></li>
                                            <li><a href="gallery-2.html">Gallery Two</a></li>
                                            <li><a href="error.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Services</a>
                                        <ul>
                                            <li><a href="service.html">Our Services</a></li>
                                            <li><a href="service-details.html">Project Planning</a></li>
                                            <li><a href="service-details-2.html">Residential Waters</a></li>
                                            <li><a href="service-details-3.html">Commercial Waters</a></li>
                                            <li><a href="service-details-4.html">Filtration Plants</a></li>
                                            <li><a href="service-details-5.html">Water Softening</a></li>
                                            <li><a href="service-details-6.html">Market Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="current dropdown"><a href="index-2.html">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Elements</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-xl-6 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 1</h4>
                                                        </li>
                                                        <li><a href="feature-element-1.html">Feature Block 01</a></li>
                                                        <li><a href="feature-element-2.html">Feature Block 02</a></li>
                                                        <li><a href="about-element-1.html">About Block 01</a></li>
                                                        <li><a href="about-element-2.html">About Block 02</a></li>
                                                        <li><a href="service-element-1.html">Service Block 01</a></li>
                                                        <li><a href="service-element-2.html">Service Block 02</a></li>
                                                        <li><a href="service-element-3.html">Service Block 03</a></li>
                                                        <li><a href="service-element-4.html">Service Block 04</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-6 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 2</h4>
                                                        </li>
                                                        <li><a href="news-element-1.html">News Block 01</a></li>
                                                        <li><a href="news-element-2.html">News Block 02</a></li>
                                                        <li><a href="team-element-1.html">Team Block 01</a></li>
                                                        <li><a href="team-element-2.html">Team Block 02</a></li>
                                                        <li><a href="cta-element-1.html">Cta Block 01</a></li>
                                                        <li><a href="cta-element-2.html">Cta Block 02</a></li>
                                                        <li><a href="pricing-element.html">Pricing Block</a></li>
                                                        <li><a href="chooseus-element.html">Chooseus Block</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid</a></li>
                                            <li><a href="blog-2.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <ul class="nav-right">
                        <li class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                                <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                    <div class="form-container">
                                        <form method="post" action="https://azim.commonsupport.com/Acuasafe/blog.html">
                                            <div class="form-group">
                                                <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cart-box">
                            <a href="shop.html"><i class="fal fa-shopping-cart"></i><span>3</span></a>
                        </li>
                        <li class="btn-box">
                            <a href="index-2.html" class="theme-btn btn-one">Request A Quote</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index-2.html"><img src="<?php echo $domain ?>assets/images/logo.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <ul class="nav-right">
                        <li class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                                <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                    <div class="form-container">
                                        <form method="post" action="https://azim.commonsupport.com/Acuasafe/blog.html">
                                            <div class="form-group">
                                                <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cart-box">
                            <a href="shop.html"><i class="fal fa-shopping-cart"></i><span>3</span></a>
                        </li>
                        <li class="btn-box">
                            <a href="index-2.html" class="theme-btn btn-one">Request A Quote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="<?php echo $domain ?>assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(<?php echo $domain ?>assets/images/background/page-title.jpg);">
            <div class="shape" style="background-image: url(<?php echo $domain ?>assets/images/shape/banner-shap.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Checkout</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- checkout-section -->
        <!-- checkout-section -->
        <section class="checkout-section">
            <div class="container">
                <div class="my-3" style="display: none;">
                    <p style="color: red;">Uses this account</p>
                    <b></b>
                </div>
                <div class="row">
                    <!-- Billing Details -->
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="inner-box">
                            <div class="billing-info">
                                <h4 class="sub-title">Billing Details</h4>
                                <form action="#" method="post" class="billing-form">
                                    <input type="hidden" name="payment_method" value="" id="paymentMethod"> <!-- Hidden payment field -->

                                    <div class="row">
                                        <!-- Full Name -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Full Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="first_name">
                                            </div>
                                        </div>

                                        <!-- Company Name -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Company Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="company_name">
                                            </div>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Email Address*</label>
                                            <div class="field-input">
                                                <input type="email" name="email">
                                            </div>
                                        </div>

                                        <!-- Phone Number -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone Number*</label>
                                            <div class="field-input">
                                                <input type="text" name="phone">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Address*</label>
                                            <div class="field-input">
                                                <input type="text" name="address" class="address">
                                                <input type="text" name="address2">
                                            </div>
                                        </div>

                                        <!-- Town/City -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Town/City*</label>
                                            <div class="field-input">
                                                <input type="text" name="town_city">
                                            </div>
                                        </div>

                                        <!-- Zip Code -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Zip Code*</label>
                                            <div class="field-input">
                                                <input type="text" name="zip">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Product Section & Payment Info -->
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="inner-box">
                            <!-- Product Info -->
                            <div class="order-info">
                                <h4 class="sub-title">Your Order</h4>
                                <div class="order-product">
                                    <ul class="order-list clearfix">
                                        <li class="title clearfix">
                                            <p>Product</p>
                                            <span>Total</span>
                                        </li>
                                        <ul class="cart-table">
                                            <!-- Product items will be injected by JavaScript -->
                                        </ul>
                                        <li class="sub-total subtotal clearfix">
                                            <h6>Sub Total</h6>
                                            <span>#0.00</span>
                                        </li>
                                        <li class="order-total subtotal clearfix">
                                            <h6>Order Total</h6>
                                            <span id="vat">#0.00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Payment Info -->
                            <div class="payment-info">
                                <h4 class="sub-title">Payment Proccess</h4>
                                <div class="payment-inner">
                                    <!-- Direct Bank Transfer -->
                                    <div class="option-block">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="radio" name="payment" value="Direct bank transfer" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Direct bank transfer</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- PayStack -->
                                    <div class="option-block">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="radio" name="payment" value="PayStack" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">PayStack <a href="checkout.html">What is PayStack?</a></span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="btn-box">
                                        <button href="#" class="theme-btn btn-one">Place Your Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout-section end -->

        <!-- checkout-section end -->
        <script>
            // Select elements
            const cartTable = document.querySelector('.cart-table');
            const paymentInputs = document.querySelectorAll('input[name="payment"]');
            const paymentMethodField = document.getElementById('paymentMethod');
            const form = document.querySelector('.billing-form');
            const subtotalElements = document.querySelectorAll('.subtotal span');
            const accountSection = document.querySelector('.my-3');
            const accountEmail = accountSection.querySelector('b');

            // Check LocalStorage for user data
            const userData = JSON.parse(localStorage.getItem('USER_ACCOUNT'));
            if (userData && userData.email) {
                accountSection.style.display = 'block';
                accountEmail.textContent = userData.email;

                // Populate form when "Uses this account" is clicked
                accountSection.addEventListener('click', () => {
                    form.querySelectorAll('input, textarea').forEach(field => {
                        const name = field.getAttribute('name');
                        if (userData[name]) {
                            field.value = userData[name];
                            field.readOnly = true; // Make fields non-editable
                        }
                    });
                });
            }

            // Populate cart data
            const cartData = JSON.parse(localStorage.getItem('USER_CHART')) || [];
            let subTotal = 0;

            if (cartData.length > 0) {
                cartData.forEach(item => {
                    const {
                        name,
                        price,
                        quantity
                    } = item;
                    const total = price * quantity;
                    subTotal += total;

                    const html = `
            <li>
                <div class="single-box clearfix">
                    <h6>${name} x ${quantity}</h6>
                    <span>#${total.toFixed(2)}</span>
                </div>
            </li>`;
                    cartTable.insertAdjacentHTML('beforeend', html);
                });

                // Update subtotal and total
                subtotalElements.forEach(el => {
                    el.textContent = `#${subTotal.toFixed(2)}`;
                    if (el.id === 'vat') {
                        el.textContent = `#${(subTotal + 5).toFixed(2)}`; // Add tax
                    }
                });
            }

            // Handle payment selection
            paymentInputs.forEach(input => {
                input.addEventListener('change', () => {
                    paymentMethodField.value = input.value;
                });
            });

            // Handle form submission
            document.querySelector('.btn-box button').addEventListener('click', async (event) => {
                event.preventDefault();

                if (!paymentMethodField.value) {
                    alert('Please select a payment method.');
                    return;
                }

                const formData = {};
                form.querySelectorAll('input, textarea').forEach(field => {
                    const name = field.getAttribute('name');
                    if (name) formData[name] = field.value;
                });

                // Check if the form is filled or user account is available
                if (!userData && (!formData.email || !formData.first_name)) {
                    alert('Please fill out the form or use an existing account.');
                    return;
                }

                // Save user data to localStorage
                if (!userData) {
                    localStorage.setItem('USER_ACCOUNT', JSON.stringify(formData));
                }

                // Send data to server (simplified)
                const response = await fetch('../server/client/api/process_order.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        formData,
                        cartData,
                        paymentMethod: paymentMethodField.value
                    }),
                });

                const result = await response.json();

                console.log(result)
                if (result.success) {
                    console.log("Redirect");
                    
                    // Redirect based on payment method
                    // if (paymentMethodField.value === 'Direct bank transfer') {
                    //     window.location.href = 'bank.php';
                    // } else if (paymentMethodField.value === 'PayStack') {
                    //     window.location.href = 'paystack.php';
                    // }
                } else {
                    alert(result.error);
                }
            });
        </script>

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(<?php echo $domain ?>assets/images/shape/shape-12.png);"></div>
                <div class="pattern-2" style="background-image: url(<?php echo $domain ?>assets/images/shape/shape-13.png);"></div>
                <div class="pattern-3" style="background-image: url(<?php echo $domain ?>assets/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
                <div class="footer-top clearfix">
                    <div class="line-shape" style="background-image: url(<?php echo $domain ?>assets/images/shape/shape-11.png);"></div>
                    <div class="text pull-left">
                        <h2>Please <span>Call Us</span> to Take an Extraordinary Service</h2>
                    </div>
                    <div class="support-box pull-right">
                        <a href="tel:7732253523"><i class="fas fa-phone"></i>(773) 225-3523</a>
                    </div>
                </div>
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index-2.html"><img src="<?php echo $domain ?>assets/images/footer-logo.png" alt=""></a></figure>
                                <div class="text">
                                    <p>Nostrud exertation ullamco labor nisi aliquip commodo duis.</p>
                                </div>
                                <div class="schedule-box">
                                    <h6>Open Hours:</h6>
                                    <ul class="list clearfix">
                                        <li>Mon - Sat: 9AM - 6PM.</li>
                                        <li>Sunday: Closed</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget ml-70">
                                <div class="widget-title">
                                    <h4>Address</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fal fa-map-marker-alt"></i>Flat 20, Reynolds Neck, FV77 8WS</li>
                                        <li><i class="fal fa-phone"></i>Call Us: <a href="tel:3336660001">333-666-0001</a></li>
                                        <li><i class="fal fa-envelope-open-text"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Usefull Link</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index-2.html">About Company</a></li>
                                        <li><a href="index-2.html">Services</a></li>
                                        <li><a href="index-2.html">How It Works</a></li>
                                        <li><a href="index-2.html">Our Blog</a></li>
                                        <li><a href="index-2.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget subscribe-widget">
                                <div class="widget-title">
                                    <h4>Subscribe</h4>
                                </div>
                                <div class="widget-content">
                                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit sed do eiusmod.</p>
                                    <div class="form-inner">
                                        <form action="https://azim.commonsupport.com/Acuasafe/contact.html" method="post">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Your Email" required="">
                                                <button type="submit"><i class="far fa-long-arrow-alt-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <div class="copyright">
                            <p><a href="index-2.html">Acuasafe</a> &copy; 2021 All Right Reserved</p>
                        </div>
                        <ul class="social-links clearfix">
                            <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <ul class="footer-nav clearfix">
                            <li><a href="index-2.html">Terms of Service</a></li>
                            <li><a href="index-2.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="<?php echo $domain ?>assets/js/jquery.js"></script>
    <script src="<?php echo $domain ?>assets/js/popper.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/owl.js"></script>
    <script src="<?php echo $domain ?>assets/js/wow.js"></script>
    <script src="<?php echo $domain ?>assets/js/validation.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.fancybox.js"></script>
    <script src="<?php echo $domain ?>assets/js/appear.js"></script>
    <script src="<?php echo $domain ?>assets/js/scrollbar.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo $domain ?>assets/js/isotope.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="<?php echo $domain ?>assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Acuasafe/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 11:12:11 GMT -->

</html>