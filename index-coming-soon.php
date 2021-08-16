<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<!-- Import head file -->
<?php require './components/head.php'; ?>

<body>

  <!-- Import loader file -->
  <?php require './components/loader.php'; ?>

  <div id="pagewrap" class="pagewrap">
    <div id="html-content" class="wrapper-content">
      <header class="header-transparent">
        <div class="header-main">
          <div class="container">
            <div class="open-offcanvas">&#9776;</div>
            <div class="utility-nav">
              <!-- <div class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-search"></i></a>
                  <div class="dropdown-menu">
                    <div class="search-form">
                      <form action="#">
                        <div class="input-group">
                          <input type="text" placeholder="Search" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-search"></i></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> -->
            </div>
            <div class="header-logo"><a href="index.php" class="logo logo-static"><img src="assets/images/logo-white.png" alt="fooday" class="logo-img"></a><a href="index.html" class="logo logo-fixed"><img src="assets/images/logo.png" alt="fooday" class="logo-img"></a></div>
            <!-- <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class="dropdown current-menu-item"><a href="index.html" class="dropdown-toggle">Home</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="homepage2.html">Home 2</a></li>
                        <li><a href="homepage3.html">Home 3</a></li>
                        <li><a href="home-fullpage.html" target="_blank">Home Full Page</a></li>
                        <li><a href="home-shop.html">Home Shop</a></li>
                        <li><a href="homesidebarmenu.html">Home Sidebar Menu</a></li>
                        <li><a href="home-one-page.html" target="_blank">Home One Page</a></li>
                        <li><a href="home-boxed.html">Home Boxed</a></li>
                      </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li class="dropdown"><a href="menu-grid-1.html">Menu</a>
                      <ul class="dropdown-menu">
                        <li><a href="menu-classic.html">Menu Classic</a></li>
                        <li><a href="menu-grid-1.html">Menu Grid 01</a></li>
                        <li><a href="menu-grid-2.html">Menu Grid 02</a></li>
                        <li><a href="menu-grid-3.html">Menu Grid 03</a></li>
                        <li><a href="product-single.html">Product Detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Blog</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="blogs.html">Blog List</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="page-404.html">404 Page</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
              </nav> -->
          </div>
        </div>
      </header>
      <div class="page-container">

        <div class="top-header top-bg-parallax">
          <div data-parallax="scroll" data-image-src="assets/images/slider/mambo-slider.jpg" class="slides parallax-window">
            <div class="slide-content slide-layout-02">
              <div class="container">
                <div class="slide-content-inner"><img src="assets/images/slider/slider2-icon.png" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="500" alt="fooday" class="slide-icon img img-responsive animated">

                  <img src="assets/images/logo.png" alt="mambo italian street food" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000" class="slide-icon img img-responsive animated">
                  <!-- <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000" class="slide-title animated">Mambo Italian Street Food</h3> -->
                  <!-- <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text"><span>Italian</span><span>Street</span><span>Food</span></span></p> -->
                  <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text"><span>Now Open</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ============ chameleon hold pages ================= -->

        <!-- <div class="page-content-wrapper">
            <section class="about-us-session padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 colsm-12"><img src="assets/images/pages/home1-about.jpg" alt="" class="img img-responsive wow zoomIn"></div>
                  <div class="col-md-6 col-sm-12">
                    <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                      <p class="top-title"><span>Discover</span></p>
                      <h3 class="title">Our Story</h3>
                    </div>
                    <p class="des font-bold text-center">WE HAVE THE GLORY BEGINING IN RESTAURANT BUSINESS</p>
                    <p class="des margin-bottom-20 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit btn-transparent"> <span>	About Us</span></a></div>
                  </div>
                </div>
              </div>
            </section>
            <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="assets/images/product/product-decorate.jpg" alt="" class="img-responsive img-decorate">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-4"></div>
                  <div class="col-lg-6 col-md-8">
                    <div class="swin-sc swin-sc-title text-left light">
                      <p class="top-title"><span>chef choise</span></p>
                      <h3 class="title">Daily Special</h3>
                    </div>
                    <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                      <div class="row">
                        <div class="col-md-12">
                          <div data-height="200" class="products nav-slider">
                            <div class="item product-01">
                              <div class="item-left"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                                <div class="content-wrapper"><a class="title">The Cracker Barrel's Country Boy Breakfast</a>
                                  <div class="dot">.....................................................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                            </div>
                            <div class="item product-01">
                              <div class="item-left"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                                <div class="content-wrapper"><a class="title">Uncle Herschel's Favorite </a>
                                  <div class="dot">.....................................................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                            </div>
                            <div class="item product-01">
                              <div class="item-left"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                                <div class="content-wrapper"><a class="title">Grandpa's Country Fried Breakfast </a>
                                  <div class="dot">.....................................................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                            </div>
                            <div class="item product-01">
                              <div class="item-left"><img src="assets/images/product/product-2d.jpg" alt="" class="img img-responsive">
                                <div class="content-wrapper"><a class="title">Chinese Chicken Bread Spicy Soup</a>
                                  <div class="dot">.....................................................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                            </div>
                            <div class="item product-01">
                              <div class="item-left"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                                <div class="content-wrapper"><a class="title">Uncle Herschel's Favorite </a>
                                  <div class="dot">.....................................................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                            </div>
                            <div class="item product-01">
                              <div class="item-left"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                                <div class="content-wrapper"><a class="title">The Cracker Barrel's Country Boy Breakfast</a>
                                  <div class="dot">.....................................................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="product-sesction-01 padding-bottom-100 padding-top-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Our Menu</span></p>
                      <h3 class="title">Tasty And Good Price</h3>
                    </div>
                    <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                              <h5 class="cat-title">Breakfast</h5>
                            </div>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-fish"></i>
                              <h5 class="cat-title">Lunch</h5>
                            </div>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-meat"></i></div>
                            <h5 class="cat-title">Dinner</h5>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-ice-cream"></i></div>
                            <h5 class="cat-title">Desset</h5>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-dinner"></i></div>
                            <h5 class="cat-title">Drink</h5>
                          </div>
                        </div>
                        <div class="col-md-2"></div>
                      </div>
                      <div class="row">
                        <div class="nav-slider">
                          <div class="tab-content">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-lunch.png" alt="" class="img img-responsive img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dinner.png" alt="" class="img img-responsive img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-lunch.png" alt="" class="img img-responsive img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
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
            </section>
            <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="testimonial-section-01 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Testimonial</span></p>
                      <h3 class="title white-color">Our Customer Says</h3>
                    </div>
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                        <div class="swin-sc swin-sc-testimonial style-1">
                          <div class="main-slider flexslider">
                            <div class="slides">
                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                </div>
                                <div class="testi-info"><span class="name">Timothy Doe</span> <span class="position">Customer</span></div>
                              </div>
                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                </div>
                                <div class="testi-info"><span class="name">Sarah	Ruiz</span> <span class="position">Director</span></div>
                              </div>
                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                </div>
                                <div class="testi-info"><span class="name">Tracey Lewis</span> <span class="position">Designer</span></div>
                              </div>
                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                </div>
                                <div class="testi-info"><span class="name">Jamie	Erickson</span> <span class="position">Manager</span></div>
                              </div>
                            </div>
                          </div>
                          <div data-width="150" class="nav-slider">
                            <ul class="slides list-inline">
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/testi/testi-1.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/testi/testi-2.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/testi/testi-3.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/testi/testi-4.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="team-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Meet Our</span></p>
                      <h3 class="title">Awesome Master Chefs</h3>
                    </div>
                    <div class="swin-sc swin-sc-team-slider">
                      <div class="team-item swin-transition wow fadeInLeft">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="assets/images/team/team-1.png" alt="" class="img img-responsive"></div>
                        </div>
                        <p class="team-name">MICHAEL DOE</p>
                        <p class="team-position">Head Chef</p>
                        <hr>
                        <ul class="socials-nb list-inline">
                          <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                      <div class="team-item swin-transition wow fadeInUp">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="assets/images/team/team-2.png" alt="" class="img img-responsive"></div>
                        </div>
                        <p class="team-name">Teresa Doe</p>
                        <p class="team-position">Head Chef</p>
                        <hr>
                        <ul class="socials-nb list-inline">
                          <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                      <div class="team-item swin-transition wow fadeInRight">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="assets/images/team/team-3.png" alt="" class="img img-responsive"></div>
                        </div>
                        <p class="team-name">BENJAMIN MARK</p>
                        <p class="team-position">Head Chef</p>
                        <hr>
                        <ul class="socials-nb list-inline">
                          <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                      <div class="team-item swin-transition">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="assets/images/team/team-4.png" alt="" class="img img-responsive"></div>
                        </div>
                        <p class="team-name">Teresa Doe</p>
                        <p class="team-position">Head Chef</p>
                        <hr>
                        <ul class="socials-nb list-inline">
                          <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="reservation-section-02 padding-top-100 padding-bottom-100">
              <div class="container"><img src="assets/images/background/home2-img-deco.png" alt="" class="img-deco img-responsive">
                <div class="row">
                  <div class="col-md-6 left-wrapper">
                    <div class="form-dark-wrapper">
                      <div class="swin-sc swin-sc-title style-3 light">
                        <p class="title"><span>Make A Reservation</span></p>
                        <p class="subtitle">You can call us directly at <span class="text-default"> 225-88888</span></p>
                      </div>
                      <div class="swin-sc swin-sc-contact-form dark mtl">
                        <form>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-phone"></div>
                              </div>
                              <input type="text" placeholder="Phone" class="form-control">
                            </div>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-male"></i></div>
                              <select type="text" placeholder="People" class="form-control">
                                <option>1 person</option>
                                <option>2 People</option>
                                <option>3 People</option>
                                <option>4 People</option>
                                <option>5 People</option>
                                <option>6 People</option>
                                <option>7 People</option>
                                <option>8 People</option>
                                <option>9 People</option>
                                <option>10 People</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                              <input type="text" placeholder="Date" class="form-control datepicker">
                            </div>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-clock-o"></div>
                              </div>
                              <select type="text" placeholder="Time" class="form-control">
                                <option>7:00 AM</option>
                                <option>8:00 AM</option>
                                <option>9:00 AM</option>
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>12:00 AM</option>
                                <option>1:00 PM</option>
                                <option>2:00 PM</option>
                                <option>3:00 PM</option>
                                <option>4:00 PM</option>
                                <option>5:00 PM</option>
                                <option>6:00 PM</option>
                                <option>7:00 PM</option>
                                <option>8:00 PM</option>
                                <option>9:00 PM</option>
                                <option>10:00 PM</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>	Find Table</span></a></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="video-wrapper equal-height deco-abs">
                <div class="swin-sc swin-sc-video">
                  <div class="play-wrap"><a href="https://vimeo.com/27814858" class="play-btn swipebox"><i class="play-icon fa fa-play"></i></a></div>
                </div>
              </div>
            </section>
            <section class="service-section-02 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-title">
                  <p class="top-title"><span>Our Service</span></p>
                  <h3 class="title">What We Focus On</h3>
                </div>
                <div class="swin-sc swin-sc-iconbox">
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-dish"></i><span class="number">1</span></div>
                        <h4 class="title">Reservation</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number">2</span></div>
                        <h4 class="title">Private Event</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-browser"></i><span class="number">3</span></div>
                        <h4 class="title">Online Order</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-delivery"></i><span class="number">4</span></div>
                        <h4 class="title">Fast Delivery</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="gallery-section-01 padding-top-100">
              <div class="swin-sc swin-sc-title">
                <p class="top-title"><span>Our Gallery</span></p>
                <h3 class="title white-color">Fooday Hot Dishes</h3>
              </div>
              <div class="swin-sc swin-sc-isotope">
                <div class="grid">
                  <div class="grid-sizer col-sm-1"></div>
                  <div class="grid-item col-sm-3 grid-item-h2">
                    <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-1.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-1.jpg" alt="" class="img img-responsive"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-4 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-2.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-2.jpg" alt="" class="img img-responsive"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-2 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-3.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-3.jpg" alt="" class="img img-responsive"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-3 grid-item-h2">
                    <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-4.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-4.jpg" alt="" class="img img-responsive"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-2 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-5.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-5.jpg" alt="" class="img img-responsive"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-4 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-6.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-6.jpg" alt="" class="img img-responsive"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="blog-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Updated from</span></p>
                      <h3 class="title">our featured blog</h3>
                    </div>
                    <div class="swin-sc swin-sc-blog-grid"></div>
                  </div>
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-blog-grid">
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div data-wow-delay="0s" class="blog-item swin-transition item wow fadeInUpShort">
                            <div class="blog-info clearfix">
                              <div class="blog-info-item blog-view">
                                <p><i class="fa fa-eye"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-comment">
                                <p><i class="fa fa-comment"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-author">
                                <p><span>Post By </span><a href="javascript:void(0)">Admin</a></p>
                                <p></p>
                              </div>
                            </div>
                            <div class="blog-featured-img"><img src="assets/images/blog/blog-grid-1.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="blog-content">
                              <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                              <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                              <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div data-wow-delay="0.5s" class="blog-item swin-transition item wow fadeInUpShort">
                            <div class="blog-info clearfix">
                              <div class="blog-info-item blog-view">
                                <p><i class="fa fa-eye"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-comment">
                                <p><i class="fa fa-comment"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-author">
                                <p><span>Post By </span><a href="javascript:void(0)">Admin</a></p>
                                <p></p>
                              </div>
                            </div>
                            <div class="blog-featured-img"><img src="assets/images/blog/blog-grid-1-1.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="blog-content">
                              <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                              <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                              <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                          <div data-wow-delay="1s" class="blog-item swin-transition item wow fadeInUpShort">
                            <div class="blog-info clearfix">
                              <div class="blog-info-item blog-view">
                                <p><i class="fa fa-eye"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-comment">
                                <p><i class="fa fa-comment"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-author">
                                <p><span>Post By </span><a href="javascript:void(0)">Admin</a></p>
                                <p></p>
                              </div>
                            </div>
                            <div class="blog-featured-img"><img src="assets/images/blog/blog-grid-1-2.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="blog-content">
                              <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                              <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                              <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div> -->

        <!-- ============ chameleon hold pages ================= -->


        <section class="service-section-02 padding-top-100 padding-bottom-100">
          <div class="container">
            <div class="swin-sc swin-sc-title">
              <p class="top-title"><span>Our Food</span></p>
              <h3 class="title">Menus</h3>
            </div>
            <div class="swin-sc swin-sc-iconbox">
              <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <a href="assets/images/mambo-Lunch-Menu.pdf">
                    <div class="item icon-box-02 wow fadeInUpShort">
                      <div class="wrapper-icon"><i class="icons swin-icon-dish"></i></div>
                      <h4 class="title">Lunch</h4>
                      <div class="description">Click to View</div>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <a href="assets/images/mambo-Dinner-Menu.pdf">
                    <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                      <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i></div>
                      <h4 class="title">Dinner</h4>
                      <div class="description">Click to View</div>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <a href="assets/images/mambo-Catering-Menu.pdf">
                    <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                      <div class="wrapper-icon"><i class="icons swin-icon-browser"></i></div>
                      <h4 class="title">Catering</h4>
                      <div class="description">Click to View</div>
                    </div>
                  </a>
                </div>


              </div>
            </div>
          </div>
        </section>


        <div class="section">
          <section class="about-us-session">
            <div class="container">

              <!-- <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                        <p class="top-title"><span>Love</span></p>
                        <h3 class="title">Valentine's Day</h3>
                      </div>
                      <p class="des font-bold text-center">Thursday, February 14, 2019</p>
                      <p class="des margin-bottom-20 text-center">Special Love Cocktails by Gerard Bertrand & cote the roses sponsored by Jack Daniel's</p>
                    </div>
                    <div class="col-md-6 colsm-12"><img src="assets/images/mambo-valentines.png" alt="mambo italian restaurant valentines day" class="img img-responsive wow fadeInRight"></div>
                  </div> -->

              <div class="row">
                <div class="col-md-6 colsm-12"><img src="assets/images/mambo-venetian-carnival.jpg" alt="mambo italian street venetian carnival" class="img img-responsive wow fadeInRight about-session-row"></div>
                <div class="col-md-6 col-sm-12">
                  <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                    <p class="top-title"><span>Celebrate</span></p>
                    <h3 class="title">Venetian Carnivalesque</h3>
                  </div>
                  <p class="des font-bold text-center">7:00 PM Saturday, March 2, 2019</p>
                  <p class="des margin-bottom-20 text-center">Music & Food Wear a masque & enjoy one of our Italian cocktails on us... Bellini | Rossini | Peroni</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                    <p class="top-title"><span>Drink Specials</span></p>
                    <h3 class="title">Sinatra Saturdays</h3>
                  </div>
                  <p class="des font-bold text-center">EVERY SATURDAY NIGHT</p>
                  <p class="des margin-bottom-20 text-center">Sponsored by Jack Daniel's featuring Live Frank Sinatra music and drink specials on of course Jack Daniel's</p>
                </div>
                <div class="col-md-6 colsm-12"><img src="assets/images/mambo-frank-sinatra.jpg" alt="mambo italian restaurant" class="img img-responsive wow fadeInRight"></div>
              </div>

              <div class="row">
                <div class="col-md-6 colsm-12"><img src="assets/images/mambo-social-media.jpg" alt="mambo italian street food specials" class="img img-responsive wow fadeInRight about-session-row"></div>
                <div class="col-md-6 col-sm-12">
                  <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                    <p class="top-title"><span>Specials</span></p>
                    <h3 class="title">Weekly Happenings</h3>
                  </div>
                  <p class="des font-bold text-center">LET THE DELICIOUSNESS JUMPING INTO THE MOUTH</p>
                  <p class="des margin-bottom-20 text-center">There's always something going on at Mambo's Italian Street Food. Check out our daily specials and drop by to say hello!</p>
                </div>
              </div>


            </div>
          </section>
        </div>
      </div>

      <!-- import footer file -->
      <?php require './components/footer.php'; ?>

      <a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
    </div>
  </div>

  <!-- import scripts file -->
  <?php require './components/scripts.php'; ?>

</body>

</html>