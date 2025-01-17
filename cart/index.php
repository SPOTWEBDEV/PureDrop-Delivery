<?php

include('../server/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title><?php echo $sitename ?> - Cart Page</title>

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

<<<<<<< HEAD
        <?php include('../includes/nav.php') ?>
=======
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

>>>>>>> e7cc5a1b42b31a75db00cffdd4f0a596d8e02025


        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(<?php echo $domain ?>assets/images/background/page-title.jpg);">
            <div class="shape" style="background-image: url(<?php echo $domain ?>assets/images/shape/banner-shap.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Cart Page</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Cart Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- cart section -->
        <section class="cart-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th class="prod-column">Product Name</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th class="price">Price</th>
                                        <th class="quantity">Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="cart-table">



                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="othre-content clearfix">
                    <div class="coupon-box pull-left clearfix">
                        <input type="text" placeholder="Enter coupon code...">
                        <button type="button">Apply coupon</button>
                    </div>
                    <div class="update-btn pull-right">
                        <button type="button" class="theme-btn btn-two">Update Cart</button>
                    </div>
                </div>
                <div class="cart-total">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                            <div class="total-cart-box clearfix">
                                <h6>Cart Totals</h6>
                                <ul class="list clearfix">
                                    <li class="subtotal">Subtotal:<span>$150.50</span></li>
                                    <li class="subtotal">Order Total:<span id="vat">$150.50</span></li>
                                </ul>
                                <a href="../checkout/" class="theme-btn btn-one">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart section end -->


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
                <h2>Get <span>Pure Water</span> and <span>Bottled Water</span> Delivered to Your Doorstep</h2>
            </div>
            <div class="support-box pull-right">
                <a href="tel:7732253523"><i class="fas fa-phone"></i><?php echo $sitenumber ?></a>
            </div>
        </div>
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/footer-logo.png" alt="Water Company Logo"></a></figure>
                        <div class="text">
                            <p>We provide clean, pure water, delivered straight to your home. Enjoy fresh bottled water anytime.</p>
                        </div>
                        <div class="schedule-box">
                            <h6>Open Hours:</h6>
                            <ul class="list clearfix">
                                <li>Mon - Sat: 9AM - 6PM</li>
                                <li>Sunday: Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget ml-70">
                        <div class="widget-title">
                            <h4>Our Address</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fal fa-map-marker-alt"></i><?php echo $siteaddress ?></li>
                                <li><i class="fal fa-phone"></i>Call Us: <a href="tel:3336660001"><?php echo $sitenumber ?></a></li>
                                <li><i class="fal fa-envelope-open-text"></i><a href="mailto:info@example.com"><?php echo $siteemail ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="index-2.html">About Us</a></li>
                                <li><a href="index-2.html">Products</a></li>
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
                            <h4>Subscribe for Offers</h4>
                        </div>
                        <div class="widget-content">
                            <p>Stay updated on special offers and new water products directly from us.</p>
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
                    <p><a href="index-2.html">Pure Water Co.</a> &copy; 2025 All Rights Reserved</p>
                </div>
                
                <ul class="footer-nav clearfix">
                    <li><a href="index-2.html">Terms of Service</a></li>
                    <li><a href="index-2.html">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>

    <script>
    let cartTable = document.querySelector('.cart-table');
    let data = JSON.parse(localStorage.getItem('USER_CHART'));
    let subtotal = document.querySelectorAll('.subtotal span');

    if (data && data.length > 0) {
        let subTotal = 0;

        data.forEach(item => {
            const { id, price, img, name, quantity } = item;
            const rowSubtotal = Number(price) * Number(quantity);
            subTotal += rowSubtotal;

            const html = `
            <tr id="row-${id}">
                <td colspan="4" class="prod-column">
                    <div class="column-box">
                        <div class="remove-btn" data-id="${id}">
                            <i class="fal fa-times"></i>
                        </div>
                        <div class="prod-thumb">
                            <img src="${img}" alt="">
                        </div>
                        <div class="prod-title">
                            ${name}
                        </div>
                    </div>
                </td>
                <td class="price">#${price}</td>
                <td class="qty">
                    <div class="item-quantity">
                        <input class="quantity-spinner" data-id="${id}" data-price="${price}" type="number" value="${quantity}" name="quantity" min="1">
                    </div>
                </td>
                <td class="sub-total">#${rowSubtotal}</td>
            </tr>`;
            cartTable.insertAdjacentHTML('beforeEnd', html);
        });

        updateTotals(subTotal);

        // Update subtotal and totals when quantity changes
        const quantityInputs = document.querySelectorAll('.quantity-spinner');
        quantityInputs.forEach(input => {
            input.onchange = event => {
                const newQuantity = Number(event.target.value);
                const price = Number(event.target.getAttribute('data-price'));
                const id = event.target.getAttribute('data-id');
                const row = document.querySelector(`#row-${id}`);

                // Update row subtotal
                const rowSubtotal = price * newQuantity;
                row.querySelector('.sub-total').textContent = `#${rowSubtotal}`;

                // Update total subtotal
                let newSubTotal = 0;
                const allSubtotals = document.querySelectorAll('.sub-total');
                allSubtotals.forEach(el => {
                    newSubTotal += Number(el.textContent.replace('#', ''));
                });
                updateTotals(newSubTotal);

                // Update local storage
                data = data.map(item => {
                    if (item.id === id) {
                        item.quantity = newQuantity;
                    }
                    return item;
                });
                localStorage.setItem('USER_CHART', JSON.stringify(data));
            };
        });
    }

    // Update totals (subtotal and VAT)
    function updateTotals(subTotal) {
        subtotal.forEach(el => {
            if (el.getAttribute('id') === 'vat') {
                el.innerHTML = `#${subTotal + 5}.00`; // Assuming VAT is a constant value of 5
            } else {
                el.innerHTML = `#${subTotal}.00`;
            }
        });
    }
</script>


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

</html>