<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/base.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">

  <title>CCIS
BUSINESS UNIT</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->


  <main class="main-content  
  bg-beige-1
">

    <header data-anim="fade" data-add-bg="" class="header -base js-header">


      <div class="header__container py-10">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="header-left">

              <div class="header__logo ">
                <a data-barba href="index.php">
                  <img src="img/general/logo.svg" alt="logo">
                </a>
              </div>

            </div>
          </div>


          <div class="col-auto">
            <div class="header-right d-flex items-center">

              <div class="header-menu js-mobile-menu-toggle ">
                <div class="header-menu__content">
                  <div class="mobile-bg js-mobile-bg"></div>

                  <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                    <a href="login.php" class="text-dark-1">Log in</a>
                    <a href="signup.php" class="text-dark-1 ml-30">Sign Up</a>
                  </div>

                  <div class="menu js-navList">
                    <ul class="menu__nav text-dark-1 -is-active">
                      <li class="menu-item-has-children">
                        <a data-barba href="#">
                          Home <i class="icon-chevron-right text-13 ml-10"></i>
                        </a>

                        <ul class="subnav">
                          <li class="menu__backButton js-nav-list-back">
                            <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Home</a>
                          </li>

                          <li><a href="index.php">Home 1</a></li>

                          <li><a href="home-2.php">Home 2</a></li>

                          <li><a href="home-3.php">Home 3</a></li>

                          <li><a href="home-4.php">Home 4</a></li>

                          <li><a href="home-5.php">Home 5</a></li>

                          <li><a href="home-6.php">Home 6</a></li>

                          <li><a href="home-7.php">Home 7</a></li>

                          <li><a href="home-8.php">Home 8</a></li>

                          <li><a href="home-9.php">Home 9</a></li>

                          <li><a href="home-10.php">Home 10</a></li>

                        </ul>
                      </li>

                      <li class="menu-item-has-children -has-mega-menu">
                        <a data-barba href="#">Courses <i class="icon-chevron-right text-13 ml-10"></i></a>


                        <div class="mega xl:d-none">
                          <div class="mega__menu">
                            <div class="row x-gap-40">
                              <div class="col">
                                <h4 class="text-17 fw-500 mb-20">Course List Layouts</h4>

                                <ul class="mega__list">

                                  <li><a data-barba href="courses-list-1.php">Course List v1</a></li>

                                  <li><a data-barba href="courses-list-2.php">Course List v2</a></li>

                                  <li><a data-barba href="courses-list-3.php">Course List v3</a></li>

                                  <li><a data-barba href="courses-list-4.php">Course List v4</a></li>

                                  <li><a data-barba href="courses-list-5.php">Course List v5</a></li>

                                  <li><a data-barba href="courses-list-6.php">Course List v6</a></li>

                                  <li><a data-barba href="courses-list-7.php">Course List v7</a></li>

                                  <li><a data-barba href="courses-list-8.php">Course List v8</a></li>

                                  <li><a data-barba href="courses-list-9.php">Course List v9</a></li>

                                </ul>

                              </div>

                              <div class="col">
                                <h4 class="text-17 fw-500 mb-20">Course Single Layouts</h4>

                                <ul class="mega__list">

                                  <li><a data-barba href="courses-single-1.php">Course Single v1</a></li>

                                  <li><a data-barba href="courses-single-2.php">Course Single v2</a></li>

                                  <li><a data-barba href="courses-single-3.php">Course Single v3</a></li>

                                  <li><a data-barba href="courses-single-4.php">Course Single v4</a></li>

                                  <li><a data-barba href="courses-single-5.php">Course Single v5</a></li>

                                  <li><a data-barba href="courses-single-6.php">Course Single v6</a></li>

                                </ul>

                              </div>

                              <div class="col">
                                <h4 class="text-17 fw-500 mb-20">About Courses</h4>

                                <ul class="mega__list">

                                  <li><a data-barba href="lesson-single-1.php">Lesson Page v1</a></li>

                                  <li><a data-barba href="lesson-single-2.php">Lesson Page v2</a></li>

                                  <li><a data-barba href="instructors-list-1.php">Instructors List v1</a></li>

                                  <li><a data-barba href="instructors-list-2.php">Instructors List v2</a></li>

                                  <li><a data-barba href="instructors-single.php">Instructors Single</a></li>

                                  <li><a data-barba href="instructors-become.php">Become an Instructor</a></li>

                                </ul>

                              </div>

                              <div class="col">
                                <h4 class="text-17 fw-500 mb-20">Dashboard Pages</h4>

                                <ul class="mega__list">

                                  <li><a data-barba href="dashboard.php">Dashboard</a></li>

                                  <li><a data-barba href="dshb-courses.php">My Courses</a></li>

                                  <li><a data-barba href="dshb-bookmarks.php">Bookmarks</a></li>

                                  <li><a data-barba href="dshb-listing.php">Add Listing</a></li>

                                  <li><a data-barba href="dshb-reviews.php">Reviews</a></li>

                                  <li><a data-barba href="dshb-settings.php">Settings</a></li>

                                  <li><a data-barba href="dshb-administration.php">Administration</a></li>

                                  <li><a data-barba href="dshb-assignment.php">Assignment</a></li>

                                  <li><a data-barba href="dshb-calendar.php">Calendar</a></li>

                                  <li><a data-barba href="dshb-dashboard.php">Single Dashboard</a></li>

                                  <li><a data-barba href="dshb-dictionary.php">Dictionary</a></li>

                                  <li><a data-barba href="dshb-forums.php">Forums</a></li>

                                  <li><a data-barba href="dshb-grades.php">Grades</a></li>

                                  <li><a data-barba href="dshb-messages.php">Messages</a></li>

                                  <li><a data-barba href="dshb-participants.php">Participants</a></li>

                                  <li><a data-barba href="dshb-quiz.php">Quiz</a></li>

                                  <li><a data-barba href="dshb-survey.php">Survey</a></li>

                                </ul>

                              </div>

                              <div class="col">
                                <h4 class="text-17 fw-500 mb-20">Popular Courses</h4>

                                <ul class="mega__list">

                                  <li><a data-barba href="#">Web Developer</a></li>

                                  <li><a data-barba href="#">Mobile Developer</a></li>

                                  <li><a data-barba href="#">Digital Marketing</a></li>

                                  <li><a data-barba href="#">Development</a></li>

                                  <li><a data-barba href="#">Finance &amp; Accounting</a></li>

                                  <li><a data-barba href="#">Design</a></li>

                                  <li><a data-barba href="#">View All Courses</a></li>

                                </ul>

                              </div>
                            </div>

                            <div class="mega-banner bg-purple-1 ml-40">
                              <div class="text-24 lh-15 text-white fw-700">
                                Join more than<br>
                                <span class="text-green-1">8 million learners</span>
                                worldwide
                              </div>
                              <a href="#" class="button -md -green-1 text-dark-1 fw-500 col-12">Start Learning For Free</a>
                            </div>
                          </div>
                        </div>


                        <ul class="subnav d-none xl:d-block">
                          <li class="menu__backButton js-nav-list-back">
                            <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Courses</a>
                          </li>

                          <li class="menu-item-has-children">
                            <a href="#">Course List Layouts<div class="icon-chevron-right text-11"></div></a>

                            <ul class="subnav">
                              <li class="menu__backButton js-nav-list-back">
                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Course List Layouts</a>
                              </li>

                              <li>
                                <a href="courses-list-1.php">Course List v1</a>
                              </li>

                              <li>
                                <a href="courses-list-2.php">Course List v2</a>
                              </li>

                              <li>
                                <a href="courses-list-3.php">Course List v3</a>
                              </li>

                              <li>
                                <a href="courses-list-4.php">Course List v4</a>
                              </li>

                              <li>
                                <a href="courses-list-5.php">Course List v5</a>
                              </li>

                              <li>
                                <a href="courses-list-6.php">Course List v6</a>
                              </li>

                              <li>
                                <a href="courses-list-7.php">Course List v7</a>
                              </li>

                              <li>
                                <a href="courses-list-8.php">Course List v8</a>
                              </li>

                              <li>
                                <a href="courses-list-all.php">Course List All</a>
                              </li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a href="#">Course Single Layouts<div class="icon-chevron-right text-11"></div></a>

                            <ul class="subnav">
                              <li class="menu__backButton js-nav-list-back">
                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Course Single Layouts</a>
                              </li>

                              <li>
                                <a href="courses-single-1.php">Course Single v1</a>
                              </li>

                              <li>
                                <a href="courses-single-2.php">Course Single v2</a>
                              </li>

                              <li>
                                <a href="courses-single-3.php">Course Single v3</a>
                              </li>

                              <li>
                                <a href="courses-single-4.php">Course Single v4</a>
                              </li>

                              <li>
                                <a href="courses-single-5.php">Course Single v5</a>
                              </li>

                              <li>
                                <a href="courses-single-6.php">Course Single v6</a>
                              </li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a href="#">About Courses<div class="icon-chevron-right text-11"></div></a>

                            <ul class="subnav">
                              <li class="menu__backButton js-nav-list-back">
                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> About Courses</a>
                              </li>

                              <li>
                                <a href="lesson-single-1.php">Lesson Page v1</a>
                              </li>

                              <li>
                                <a href="lesson-single-2.php">Lesson Page v2</a>
                              </li>

                              <li>
                                <a href="instructors-list-1.php">Instructors List v1</a>
                              </li>

                              <li>
                                <a href="instructors-list-2.php">Instructors List v2</a>
                              </li>

                              <li>
                                <a href="instructors-single.php">Instructors Single</a>
                              </li>

                              <li>
                                <a href="instructors-become.php">Become an Instructor</a>
                              </li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a href="#">Dashboard Pages<div class="icon-chevron-right text-11"></div></a>

                            <ul class="subnav">
                              <li class="menu__backButton js-nav-list-back">
                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Dashboard Pages</a>
                              </li>

                              <li>
                                <a href="dashboard.php">Dashboard</a>
                  <a href="backend/html/index.php">Backend</a>
                              </li>

                              <li>
                                <a href="dshb-courses.php">My Courses</a>
                              </li>

                              <li>
                                <a href="dshb-bookmarks.php">Bookmarks</a>
                              </li>

                              <li>
                                <a href="dshb-listing.php">Add Listing</a>
                              </li>

                              <li>
                                <a href="dshb-reviews.php">Reviews</a>
                              </li>

                              <li>
                                <a href="dshb-settings.php">Settings</a>
                              </li>

                              <li>
                                <a href="dshb-administration.php">Administration</a>
                              </li>

                              <li>
                                <a href="dshb-assignment.php">Assignment</a>
                              </li>

                              <li>
                                <a href="dshb-calendar.php">Calendar</a>
                              </li>

                              <li>
                                <a href="dshb-dashboard.php">Single Dashboard</a>
                              </li>

                              <li>
                                <a href="dshb-dictionary.php">Dictionary</a>
                              </li>

                              <li>
                                <a href="dshb-forums.php">Forums</a>
                              </li>

                              <li>
                                <a href="dshb-grades.php">Grades</a>
                              </li>

                              <li>
                                <a href="dshb-messages.php">Messages</a>
                              </li>

                              <li>
                                <a href="dshb-participants.php">Participants</a>
                              </li>

                              <li>
                                <a href="dshb-quiz.php">Quiz</a>
                              </li>

                              <li>
                                <a href="dshb-survey.php">Survey</a>
                              </li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a href="#">Popular Courses<div class="icon-chevron-right text-11"></div></a>

                            <ul class="subnav">
                              <li class="menu__backButton js-nav-list-back">
                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Popular Courses</a>
                              </li>

                              <li>
                                <a href="#">Web Developer</a>
                              </li>

                              <li>
                                <a href="#">Mobile Developer</a>
                              </li>

                              <li>
                                <a href="#">Digital Marketing</a>
                              </li>

                              <li>
                                <a href="#">Development</a>
                              </li>

                              <li>
                                <a href="#">Finance &amp; Accounting</a>
                              </li>

                              <li>
                                <a href="#">Design</a>
                              </li>

                              <li>
                                <a href="#">View All Courses</a>
                              </li>

                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a data-barba href="#">Events <i class="icon-chevron-right text-13 ml-10"></i></a>
                        <ul class="subnav">
                          <li class="menu__backButton js-nav-list-back">
                            <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Events</a>
                          </li>

                          <li><a href="event-list-1.php">Event List 1</a></li>

                          <li><a href="event-list-2.php">Event List 2</a></li>

                          <li><a href="event-single.php">Event Single</a></li>

                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a data-barba href="#">Blog <i class="icon-chevron-right text-13 ml-10"></i></a>
                        <ul class="subnav">
                          <li class="menu__backButton js-nav-list-back">
                            <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Blog</a>
                          </li>

                          <li><a href="blog-list-1.php">Blog List 1</a></li>

                          <li><a href="blog-list-2.php">Blog List 2</a></li>

                          <li><a href="blog-list-3.php">Blog List 3</a></li>

                          <li><a href="blog-single.php">Blog Single</a></li>

                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a data-barba href="#">
                          Pages <i class="icon-chevron-right text-13 ml-10"></i>
                        </a>

                        <ul class="subnav">
                          <li class="menu__backButton js-nav-list-back">
                            <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Pages</a>
                          </li>
                          <li class="menu-item-has-children">
                            <a href="#">About Us<div class="icon-chevron-right text-11"></div></a>

                            <ul class="subnav">
                              <li class="menu__backButton js-nav-list-back">
                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> About Us</a>
                              </li>

                              <li>
                                <a href="about-1.php">About 1</a>
                              </li>

                              <li>
                                <a href="about-2.php">About 2</a>
                              </li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a href="#">Contact<div class="icon-chevron-right text-11"></div></a>
                            <ul class="subnav">
                              <li class="menu__backButton js-nav-list-back">
                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Contact</a>
                              </li>

                              <li>
                                <a href="contact-1.php">Contact 1</a>
                              </li>

                              <li>
                                <a href="contact-2.php">Contact 2</a>
                              </li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a href="#">Shop<div class="icon-chevron-right text-11"></div></a>
                            <ul class="subnav">
                              <li class="menu__backButton js-nav-list-back">
                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Shop</a>
                              </li>

                              <li>
                                <a href="shop-cart.php">Shop Cart</a>
                              </li>

                              <li>
                                <a href="shop-checkout.php">Shop Checkout</a>
                              </li>

                              <li>
                                <a href="shop-list.php">Shop List</a>
                              </li>

                              <li>
                                <a href="shop-order.php">Shop Order</a>
                              </li>

                              <li>
                                <a href="shop-single.php">Shop Single</a>
                              </li>

                            </ul>
                          </li>


                          <li>
                            <a href="pricing.php">Membership plans</a>
                          </li>

                          <li>
                            <a href="404.php">404 Page</a>
                          </li>

                          <li>
                            <a href="terms.php">FAQs</a>
                          </li>

                          <li>
                            <a href="help-center.php">Help Center</a>
                          </li>

                          <li>
                            <a href="login.php">Login</a>
                          </li>

                          <li>
                            <a href="signup.php">Register</a>
                          </li>

                          <li>
                            <a href="ui-elements.php">UI Elements</a>
                          </li>

                        </ul>
                      </li>

                      <li>
                        <a data-barba href="contact-1.php">Contact</a>
                      </li>
                    </ul>
                  </div>

                  <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                    <div class="mobile-footer__number">
                      <div class="text-17 fw-500 text-dark-1">Call us</div>
                      <div class="text-17 fw-500 text-purple-1">+(966) 11 467 7580</div>
                    </div>

                    <div class="lh-2 mt-10">
                      <div>King Saud University, Riyadh Saudi Arabia</div>
                      <div>ccisbusiness@ksu.edu.sa</div>
                    </div>

                    <div class="mobile-socials mt-10">

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-facebook"></i>
                      </a>

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-twitter"></i>
                      </a>

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-instagram"></i>
                      </a>

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                  <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                    <div class="icon-close text-dark-1 text-16"></div>
                  </div>
                </div>

                <div class="header-menu-bg"></div>
              </div>


              <div class="mr-30">

                <div class="d-none xl:d-block ml-20">
                  <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                    <i class="text-11 icon icon-mobile-menu"></i>
                  </button>
                </div>

              </div>

              <div class="header-right__buttons md:d-none">
                <a href="signup.php" class="button -sm -rounded -dark-1 text-white">Sign Up</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>


    <div class="content-wrapper  js-content-wrapper">

      <section class="form-page js-mouse-move-container">
        <div class="form-page__img bg-dark-1">
          <div class="form-page-composition">
            <div class="-bg"><img data-move="30" class="js-mouse-move" src="img/login/bg.png" alt="bg"></div>
            <div class="-el-1"><img data-move="20" class="js-mouse-move" src="img/home-9/hero/bg.png" alt="image"></div>
            <div class="-el-2"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/1.png" alt="icon"></div>
            <div class="-el-3"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/2.png" alt="icon"></div>
            <div class="-el-4"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/3.png" alt="icon"></div>
          </div>
        </div>

        <div class="form-page__content lg:py-50">
          <div class="container">
            <div class="row justify-center items-center">
              <div class="col-xl-6 col-lg-8">
                <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                  <h3 class="text-30 lh-13">Login</h3>
                  <p class="mt-10">Don't have an account yet? <a href="signup.php" class="text-purple-1">Sign up for free</a></p>

                  <form class="contact-form respondForm__form row y-gap-20 pt-30" action="#">
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Username Or Email</label>
                      <input type="text" name="title" placeholder="Name">
                    </div>
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password</label>
                      <input type="password" name="title" placeholder="Password">
                    </div>
                    <div class="col-12">
                      <button type="submit" name="submit" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                        Login
                      </button>
                    </div>
                  </form>

                  <div class="lh-12 text-dark-1 fw-500 text-center mt-20">Or sign in using</div>

                  <div class="d-flex x-gap-20 items-center justify-between pt-20">
                    <div><button class="button -sm px-24 py-20 -outline-blue-3 text-blue-3 text-14">Log In via Facebook</button></div>
                    <div><button class="button -sm px-24 py-20 -outline-red-3 text-red-3 text-14">Log In via Google+</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    </div>
  </main>

  <!-- JavaScript -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>
</body>

</html>