<?php

include('./server/connection.php');

?>

<DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title><?php echo $sitename ?> - Welcome Page</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style1.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


    


        <!-- main header -->
        <header class="main-header">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index-2.html"><img src="assets/images/logo.png" alt=""></a></figure>
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
                                    <li class="current"><a href="<?php echo $domain ?>">Home</a> </li>
									<li><a href="<?php echo $domain ?>about/">About</a></li>
                                    <li><a href="<?php echo $domain  ?>contact/">Contact</a></li>   
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
                            <a href="cart.php"><i class="fal fa-shopping-cart"></i><span>3</span></a>
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
                        <figure class="logo"><a href="index-2.html"><img src="assets/images/logo.png" alt=""></a></figure>
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
                <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
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


        <!-- banner-style-two -->
        <section class="banner-style-two">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-15.png);"></div>
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url(assets/images/banner/banner-1.png);"></div>
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/banner/vector-3.png" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <h2>Always Want Safe and Good Water for Healthy Life</h2>
                                <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit.</p>
                                <div class="btn-box clearfix">
                                    <a href="service.html" class="theme-btn btn-one">Our Services</a>
                                    <a href="service.html" class="theme-btn banner-btn">Discover</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url(assets/images/banner/banner-2.png);"></div>
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/banner/vector-4.png" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <h2>Always Want Safe and Good Water for Healthy Life</h2>
                                <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit.</p>
                                <div class="btn-box clearfix">
                                    <a href="service.html" class="theme-btn btn-one">Our Services</a>
                                    <a href="service.html" class="theme-btn banner-btn">Discover</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="pattern-layer-2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
                    <div class="image-layer" style="background-image: url(assets/images/banner/banner-3.png);"></div>
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="content-box">
                                <h2>Always Want Safe and Good Water for Healthy Life</h2>
                                <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit.</p>
                                <div class="btn-box clearfix">
                                    <a href="service.html" class="theme-btn btn-one">Our Services</a>
                                    <a href="service.html" class="theme-btn banner-btn">Discover</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-style-two end -->


       <!-- feature-section -->
<section class="feature-section alternat-2 centred">
    <div class="auto-container">
        <div class="inner-container wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="title-text">
                <h2>A Trusted Name In <br />Premium Water Delivery</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <div class="icon-box"><i class="flaticon-water-drop"></i></div>
                            <h4>Maximum Purity</h4>
                            <p>Our water undergoes advanced filtration to ensure maximum purity for your health.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <div class="icon-box"><i class="flaticon-water-drop-1"></i></div>
                            <h4>Chlorine-Free</h4>
                            <p>Delivered water is free from harmful chemicals like chlorine, keeping it fresh and safe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <div class="icon-box"><i class="flaticon-recycle"></i></div>
                            <h4>5-Step Filtration</h4>
                            <p>Every drop passes through a rigorous 5-step filtration process for unmatched quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-glass"></i></div>
                            <h4>Healthy Hydration</h4>
                            <p>Enjoy clean, healthy water that keeps you hydrated and energized all day long.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-section end -->



       <!-- about-style-two -->
<section class="about-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-16.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <h2>We Ensure Safe and Pure Drinking Water for a Healthier Life.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>We are committed to delivering high-quality, purified drinking water to ensure your health and well-being. Our advanced filtration processes remove impurities, making every drop safe and refreshing.</p>
                        <p>With our dedication to excellence, we guarantee water that meets the highest safety standards. Stay hydrated and live better with our reliable water supply services.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-inner">
            <div class="inner-box" style="background-image: url(assets/images/background/video-1.jpg);">
                <div class="video-btn">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->



        <!-- shop-section -->
        <section class="shop-section centred pt-145">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>We Deliver Best Quality <br />Bottle Packs.</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                            <div class="inner-box" id="cart-1">
                                <figure class="image-box"><img src="assets/images/resource/shop/shop-1.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                                    <span>2L 3 Bottles</span>
                                    <h4><a href="shop-details.html">Mineral Water Bottle</a></h4>
                                    <h6>$<span>70.00</span></h6>
                                    <p>Lorem ipsum dolor sit amet adipelit sed eiusmte.mpor encid dolore.</p>
                                    <div class="btn-box">
                                        <button class="theme-btn btn-two addcart">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500m">
                            <div class="inner-box" id="cart-2">
                                <figure class="image-box"><img src="assets/images/resource/shop/shop-2.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                                    <span>3L 3 Bottles</span>
                                    <h4><a href="shop-details.html">Mineral Water Bottle</a></h4>
                                    <h6>$<span>60.00</span></h6>
                                    <p>Lorem ipsum dolor sit amet adipelit sed eiusmte.mpor encid dolore.</p>
                                    <div class="btn-box">
                                         <button class="theme-btn btn-two addcart">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500m">
                            <div class="inner-box" id="cart-3">
                                <figure class="image-box"><img src="assets/images/resource/shop/shop-3.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                                    <span>3L 2 Bottles</span>
                                    <h4><a href="shop-details.html">Mineral Water Bottle</a></h4>
                                    <h6>$<span>55.00</span></h6>
                                    <p>Lorem ipsum dolor sit amet adipelit sed eiusmte.mpor encid dolore.</p>
                                    <div class="btn-box">
                                        <button class="theme-btn btn-two addcart">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-section end -->


        <!-- cta-style-two -->
<section class="cta-style-two bg-color-1">
    <div class="bg-layer" style="background-image: url(assets/images/shape/shape-18.png);"></div>
    <div class="pattern-layer">
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-20.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box">
                        <figure class="image clearfix wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                            <img src="assets/images/resource/cta-2.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_4">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>Ready to Experience Our Premium Water Supply Service?</h2>
                        </div>
                        <div class="text">
                            <p>We proudly serve over 10 countries, ensuring fresh and clean water delivery to your doorstep within 2 hours in any part of the city.</p>
                        </div>
                        <ul class="list clearfix">
                            <li>Free Delivery</li>
                            <li>Available 7 Days a Week</li>
                        </ul>
                        <div class="btn-box">
                            <a href="service.html" class="theme-btn btn-one">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-style-two end -->

<!-- testimonial-section -->
<section class="testimonial-section alternat-2 bg-color-1">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-21.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-22.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred light">
            <h2>What Our Clients Are Saying <br />About <span><?php echo $sitename; ?></span></h2>
        </div>
        <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>The water quality is exceptional, and the delivery is always on time. Highly recommend!</p>
                        <h5>Nicolas Lawson</h5>
                        <span class="designation">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>Exceptional service with clean and fresh water delivered straight to my home. Couldn't be happier!</p>
                        <h5>Michael Bean</h5>
                        <span class="designation">Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->



        <!-- contact-section -->
        <section class="contact-section bg-color-1">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-23.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                        <div class="title-inner">
                            <div class="sec-title">
                                <h2>Get a Free Quote to Create Your Desired Business.</h2>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit sed do eiusmod tempor incididunt labore aliqua enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="content_block_5">
                            <div class="form-inner">
                                <form method="post" action="https://azim.commonsupport.com/Acuasafe/sendemail.php" id="contact-form" class="default-form"> 
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Your Name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Your Email" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="phone" required="" placeholder="Phone number">
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="subject" required="" placeholder="Subject">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message..."></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button class="theme-btn btn-one" type="submit" name="submit-form">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- news-section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>Stay Updated with <br />DrinkPure</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt="Water Quality News"></a></figure>
                        <div class="lower-content">
                            <div class="category"><a href="blog-details.html">Water Safety</a></div>
                            <h4><a href="blog-details.html">Tips for Ensuring Clean and Safe Drinking Water</a></h4>
                            <ul class="post-info clearfix">
                                <li><a href="blog-details.html">John Doe</a></li>
                                <li>Jan 05, 2025</li>
                            </ul>
                            <div class="text">
                                <p>Learn how to maintain water safety at home and understand the benefits of purified drinking water.</p>
                            </div>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn btn-two">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt="Water Supply Update"></a></figure>
                        <div class="lower-content">
                            <div class="category"><a href="blog-details.html">Water Supply</a></div>
                            <h4><a href="blog-details.html">How We Ensure Consistent Water Quality Standards</a></h4>
                            <ul class="post-info clearfix">
                                <li><a href="blog-details.html">Jane Smith</a></li>
                                <li>Jan 02, 2025</li>
                            </ul>
                            <div class="text">
                                <p>Discover the processes behind our quality control and the technologies we use to provide pure water.</p>
                            </div>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn btn-two">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt="Community Outreach"></a></figure>
                        <div class="lower-content">
                            <div class="category"><a href="blog-details.html">Community</a></div>
                            <h4><a href="blog-details.html">Our Initiatives to Provide Clean Water to All</a></h4>
                            <ul class="post-info clearfix">
                                <li><a href="blog-details.html">Michael Johnson</a></li>
                                <li>Dec 30, 2024</li>
                            </ul>
                            <div class="text">
                                <p>Read about our efforts to make clean water accessible to underserved communities.</p>
                            </div>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn btn-two">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-section end -->



        <!-- main-footer -->
        <footer class="main-footer">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
                <div class="footer-top clearfix">
                    <div class="line-shape" style="background-image: url(assets/images/shape/shape-11.png);"></div>
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
                                <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
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
	
	
	<script>
		
		let addcart = document.querySelectorAll('.addcart');
		addcart.forEach(el=> {
		        el.onclick = (event)=>{
					 console.log(event.target.closest('.inner-box'))
					let parent = event.target.closest('.inner-box')
					let price = document.querySelector(`#${parent.id} h6 span`).textContent
					let name = document.querySelector(`#${parent.id} h4 a`).textContent
					let img = document.querySelector(`#${parent.id} figure img`).src
					console.log(price, name , img)
					
					let info = {
						id:parent.id,
						price,
						name,
						img
					}
					
					let data = JSON.parse(localStorage.getItem('USER_CHART'));
					
					if(data == null){
						let store = [];
						store.push(info);
						localStorage.setItem("USER_CHART",JSON.stringify(store))
					}else{

						let status = true;
						for(let i=0;i<data.length;i++){
							if(data[i].id == info.id){
								status = false
							}
						}
						if(status === true){
							
							data.push(info);
						localStorage.setItem("USER_CHART",JSON.stringify(data))
							alert('Successful added this item to your cart list')
						}else{
							alert('Cart as already been added')
						}
						
					}
					
					
				}
		})
	
	</script>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>