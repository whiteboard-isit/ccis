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


  <main class="main-content  ">

    <header data-anim="fade" data-add-bg="bg-dark-1" class="header -type-1 js-header is-in-view">


      <div class="header__container">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="header-left">

              <div class="header__logo ">
                <a data-barba="" href="index.php">
                  <img src="img/general/Logo-Business-Unit-Dark.png" alt="logo" class="logo-header">
                </a>
              </div>


              

            </div>
          </div>


          <div class="header-menu js-mobile-menu-toggle ">
            <div class="header-menu__content">
              <div class="mobile-bg js-mobile-bg"></div>

              <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                <a href="login.php" class="text-dark-1">Log in</a>
                <a href="signup.php" class="text-dark-1 ml-30">Sign Up</a>
              </div>

              <div class="menu js-navList">
                <ul class="menu__nav text-white -is-active">

                  <li>
                    <a data-barba="" href="index.php">Homepage</a>
                  </li>

                  <li>
                    <a data-barba="" href="about-1.php">About Us</a>
                  </li>

                  <li>
                    <a data-barba="" href="courses-list-1.php">Training Programs</a>
                  </li>

                  <li class="menu-item-has-children">
                    <a data-barba="">Services <i class="icon-chevron-right text-13 ml-10"></i></a>
                    <ul class="subnav">
                      <li class="menu__backButton js-nav-list-back">
                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Services</a>
                      </li>

                      <li><a href="service-1.php">Consultation Services</a></li>

                      <li><a href="service-2.php">Projects and Technical Solutions</a></li>

                      <li><a href="service-3.php">Research and Studies</a></li>

                      <li><a href="service-4.php">Academic Programs Accreditation</a></li>

                      <li><a href="service-5.php">Resources Utilization</a></li>

                      

                    </ul>
                  </li>

                  <li class="menu-item-has-children">
                    <a data-barba="">My Account <i class="icon-chevron-right text-13 ml-10"></i></a>
                    <ul class="subnav">
                      <li class="menu__backButton js-nav-list-back">
                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> My Account</a>
                      </li>

                      <li><a data-barba="" href="dashboard.php">Dashboard</a></li>

                      <li><a data-barba="" href="dshb-courses.php">My Courses</a></li>

                      <li><a data-barba="" href="dshb-bookmarks.php">Bookmarks</a></li>

                      <li><a data-barba="" href="dshb-listing.php">Add Course</a></li>

                      <li><a data-barba="" href="dshb-reviews.php">Reviews</a></li>

                      

                      

                      <li><a data-barba="" href="dshb-calendar.php">Calendar</a></li>

                      

                      

                      <li><a data-barba="" href="dshb-messages.php">Messages</a></li>

                      

                      <li><a data-barba="" href="dshb-survey.php">Survey</a></li>

                    </ul>
                  </li>



                  

                  <li>
                    <a data-barba="" href="contact-1.php">Contact</a>
                  </li>
                  <li>
                    <a data-barba="" href="backend/html/index.php">Backend</a>
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


          <div class="col-auto">
            <div class="header-right d-flex items-center">
              <div class="header-right__icons text-white d-flex items-center">

                <div class="">
                  <button class="d-flex items-center text-white" data-el-toggle=".js-search-toggle">
                    <i class="text-20 icon icon-search"></i>
                  </button>

                  <div class="toggle-element js-search-toggle">
                    <div class="header-search pt-90 bg-white shadow-4">
                      <div class="container">
                        <div class="header-search__field">
                          <div class="icon icon-search text-dark-1"></div>
                          <input type="text" class="col-12 text-18 lh-12 text-dark-1 fw-500" placeholder="What do you want to learn?">

                          <button class="d-flex items-center justify-center size-40 rounded-full bg-purple-3" data-el-toggle=".js-search-toggle">
                            <img src="img/menus/close.svg" alt="icon">
                          </button>
                        </div>


                      </div>
                    </div>
                    <div class="header-search__bg" data-el-toggle=".js-search-toggle"></div>
                  </div>
                </div>


                <div class="relative ml-30 xl:ml-20">
                  <button class="d-flex items-center text-white" data-el-toggle=".js-cart-toggle">
                    <i class="text-20 icon icon-basket"></i>
                  </button>

                  <div class="toggle-element js-cart-toggle">
                    <div class="header-cart bg-white -dark-bg-dark-1 rounded-8">
                      <div class="px-30 pt-30 pb-10">

                        <div class="row justify-between x-gap-40 pb-20">
                          <div class="col">
                            <div class="row x-gap-10 y-gap-10">
                              <div class="col-auto">
                                <img src="img/menus/cart/1.png" alt="image">
                              </div>

                              <div class="col">
                                <div class="text-dark-1 lh-15">The Ultimate Drawing Course Beginner to Advanced...</div>

                                <div class="d-flex items-center mt-10">
                                  <div class="lh-12 fw-500 line-through text-light-1 mr-10">$179</div>
                                  <div class="text-18 lh-12 fw-500 text-dark-1">$79</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-auto">
                            <button><img src="img/menus/close.svg" alt="icon"></button>
                          </div>
                        </div>

                        <div class="row justify-between x-gap-40 pb-20">
                          <div class="col">
                            <div class="row x-gap-10 y-gap-10">
                              <div class="col-auto">
                                <img src="img/menus/cart/2.png" alt="image">
                              </div>

                              <div class="col">
                                <div class="text-dark-1 lh-15">User Experience Design Essentials - Adobe XD UI UX...</div>

                                <div class="d-flex items-center mt-10">
                                  <div class="lh-12 fw-500 line-through text-light-1 mr-10">$179</div>
                                  <div class="text-18 lh-12 fw-500 text-dark-1">$79</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-auto">
                            <button><img src="img/menus/close.svg" alt="icon"></button>
                          </div>
                        </div>

                      </div>

                      <div class="px-30 pt-20 pb-30 border-top-light">
                        <div class="d-flex justify-between">
                          <div class="text-18 lh-12 text-dark-1 fw-500">Total:</div>
                          <div class="text-18 lh-12 text-dark-1 fw-500">$659</div>
                        </div>

                        <div class="row x-gap-20 y-gap-10 pt-30">
                          <div class="col-sm-6">
                            <button class="button py-20 -dark-1 text-white -dark-button-white col-12">View Cart</button>
                          </div>
                          <div class="col-sm-6">
                            <button class="button py-20 -purple-1 text-white col-12">Checkout</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="d-none xl:d-block ml-20">
                  <button class="text-white items-center" data-el-toggle=".js-mobile-menu-toggle">
                    <i class="text-11 icon icon-mobile-menu"></i>
                  </button>
                </div>

              </div>

              <div class="header-right__buttons d-flex items-center ml-30 md:d-none">
                <a href="login.php" class="button -underline text-white">Log in</a>
                <a href="signup.php" class="button -sm -white text-dark-1 ml-30">Sign up</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>


    <div class="content-wrapper  js-content-wrapper">


      <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
          <div class="row">
            <div class="col-auto">
              <div class="breadcrumbs__content">


              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="page-header -type-1">
        <div class="container">
          <div class="page-header__content">
            <div class="row">
              <div class="col-auto">
                <div data-anim="slide-up delay-1">

                  <h1 class="page-header__title">Training Programs</h1>

                </div>

                <div data-anim="slide-up delay-2">

                  <p class="page-header__text">Training courses and workshops in the latest information technology disciplines</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
          <div class="row y-gap-50">
            <div class="col-xl-3 col-lg-4 lg:d-none">
              <div class="pr-30 lg:pr-0">

                <div data-anim="slide-up delay-2" class="sidebar -courses">
                  <div class="sidebar__item">
                    <div class="accordion js-accordion">
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button items-center">
                          <h5 class="sidebar__title">Category</h5>

                          <div class="accordion__icon">
                            <div class="icon icon-chevron-down"></div>
                            <div class="icon icon-chevron-up"></div>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="accordion__content__inner">
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Art</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Exercise</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Software Development</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Music</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Material Design</div>
                                <div class="sidebar-checkbox__count">(34)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Photography</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                            </div>

                            <div class="sidebar__more mt-15">
                              <a href="#" class="text-14 fw-500 underline text-purple-1">Show more</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="sidebar__item">
                    <div class="accordion js-accordion">
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button items-center">
                          <h5 class="sidebar__title">Ratings</h5>

                          <div class="accordion__icon">
                            <div class="icon icon-chevron-down"></div>
                            <div class="icon icon-chevron-up"></div>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="accordion__content__inner">
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title d-flex items-center">
                                  <div class="d-flex x-gap-5 pr-10">
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                  </div>
                                  4.5 &amp; up
                                </div>
                                <div class="sidebar-checkbox__count">(1991)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title d-flex items-center">
                                  <div class="d-flex x-gap-5 pr-10">
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                  </div>
                                  4.0 &amp; up
                                </div>
                                <div class="sidebar-checkbox__count">(200)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title d-flex items-center">
                                  <div class="d-flex x-gap-5 pr-10">
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                  </div>
                                  3.5 &amp; up
                                </div>
                                <div class="sidebar-checkbox__count">(300)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title d-flex items-center">
                                  <div class="d-flex x-gap-5 pr-10">
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                  </div>
                                  3.0 &amp; up
                                </div>
                                <div class="sidebar-checkbox__count">(500)</div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="sidebar__item">
                    <div class="accordion js-accordion">
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button items-center">
                          <h5 class="sidebar__title">Instructors</h5>

                          <div class="accordion__icon">
                            <div class="icon icon-chevron-down"></div>
                            <div class="icon icon-chevron-up"></div>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="accordion__content__inner">
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Jane Cooper</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Jenny Wilson</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Robert Fox</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Jacob Jones</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Albert Flores</div>
                                <div class="sidebar-checkbox__count">(34)</div>
                              </div>

                            </div>
                            <div class="sidebar__more mt-15">
                              <a href="#" class="text-14 fw-500 underline text-purple-1">Show more</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="sidebar__item">
                    <div class="accordion js-accordion">
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button items-center">
                          <h5 class="sidebar__title">Price</h5>

                          <div class="accordion__icon">
                            <div class="icon icon-chevron-down"></div>
                            <div class="icon icon-chevron-up"></div>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="accordion__content__inner">
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio-2" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">All</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio-2" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Free</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio-2" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Paid</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="sidebar__item">
                    <div class="accordion js-accordion">
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button items-center">
                          <h5 class="sidebar__title">Level</h5>

                          <div class="accordion__icon">
                            <div class="icon icon-chevron-down"></div>
                            <div class="icon icon-chevron-up"></div>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="accordion__content__inner">
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">All Levels</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Beginner</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Intermediate</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Expert</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="sidebar__item">
                    <div class="accordion js-accordion">
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button items-center">
                          <h5 class="sidebar__title">Languange</h5>

                          <div class="accordion__icon">
                            <div class="icon icon-chevron-down"></div>
                            <div class="icon icon-chevron-up"></div>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="accordion__content__inner">
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">English</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">French</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">German</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Italian</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Turkish</div>
                                <div class="sidebar-checkbox__count">(34)</div>
                              </div>

                            </div>
                            <div class="sidebar__more mt-15">
                              <a href="#" class="text-14 fw-500 underline text-purple-1">Show more</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="sidebar__item">
                    <div class="accordion js-accordion">
                      <div class="accordion__item js-accordion-item-active">
                        <div class="accordion__button items-center">
                          <h5 class="sidebar__title">Duration</h5>

                          <div class="accordion__icon">
                            <div class="icon icon-chevron-down"></div>
                            <div class="icon icon-chevron-up"></div>
                          </div>
                        </div>

                        <div class="accordion__content">
                          <div class="accordion__content__inner">
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Less than 3 hours</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">4 - 7 hours</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">8 -18 hours </div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">20 + Hours</div>
                                <div class="sidebar-checkbox__count">(67)</div>
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

            <div data-anim-child="slide-up delay-3" class="col-xl-9 col-lg-8">
              <div class="accordion js-accordion">
                <div class="accordion__item">
                  <div class="row y-gap-20 items-center justify-between pb-30">
                    <div class="col-auto">
                      <div class="text-14 lh-12">Showing <span class="text-dark-1 fw-500">250</span> total results</div>
                    </div>

                    <div class="col-auto">
                      <div class="row x-gap-20 y-gap-20">
                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <div class="text-14 lh-12 fw-500 text-dark-1 mr-20">Sort by:</div>

                            <div class="dropdown js-dropdown js-category-active">
                              <div class="dropdown__button d-flex items-center text-14 rounded-8 px-20 py-10 text-14 lh-12" data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                                <span class="js-dropdown-title">Most Popular</span>
                                <i class="icon text-9 ml-40 icon-chevron-down"></i>
                              </div>

                              <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-category-toggle">
                                <div class="text-14 y-gap-15 js-dropdown-list">

                                  <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Design</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>

                                  <div><a href="#" class="d-block js-dropdown-link">Business</a></div>

                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                        <div class="col-auto d-none lg:d-block">
                          <div class="accordion__button w-unset">
                            <button class="button h-50 px-30 -light-7 text-purple-1">
                              <i class="icon-filter mr-10"></i>
                              Filter
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion__content d-none lg:d-block">
                    <div class="sidebar -courses px-30 py-30 rounded-8 bg-light-3 mb-50">
                      <div class="row x-gap-60 y-gap-40">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="sidebar__item">
                            <h5 class="sidebar__title">Category</h5>
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Art</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Exercise</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Software Development</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Music</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Material Design</div>
                                <div class="sidebar-checkbox__count">(34)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Photography</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                            </div>
                            <div class="sidebar__more mt-15">
                              <a href="#" class="text-14 fw-500 underline text-purple-1">Show more</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="sidebar__item">
                            <h5 class="sidebar__title">Ratings</h5>
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title d-flex items-center">
                                  <div class="d-flex x-gap-5 pr-10">
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                  </div>
                                  4.5 &amp; up
                                </div>
                                <div class="sidebar-checkbox__count">(1991)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title d-flex items-center">
                                  <div class="d-flex x-gap-5 pr-10">
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                  </div>
                                  4.0 &amp; up
                                </div>
                                <div class="sidebar-checkbox__count">(200)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title d-flex items-center">
                                  <div class="d-flex x-gap-5 pr-10">
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                  </div>
                                  3.5 &amp; up
                                </div>
                                <div class="sidebar-checkbox__count">(300)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title d-flex items-center">
                                  <div class="d-flex x-gap-5 pr-10">
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                    <div class="icon-star text-11 text-yellow-1"></div>
                                  </div>
                                  3.0 &amp; up
                                </div>
                                <div class="sidebar-checkbox__count">(500)</div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="sidebar__item">
                            <h5 class="sidebar__title">Instructors</h5>
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Jane Cooper</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Jenny Wilson</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Robert Fox</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Jacob Jones</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Albert Flores</div>
                                <div class="sidebar-checkbox__count">(34)</div>
                              </div>

                            </div>
                            <div class="sidebar__more mt-15">
                              <a href="#" class="text-14 fw-500 underline text-purple-1">Show more</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="sidebar__item">
                            <h5 class="sidebar__title">Price</h5>
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio-2" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">All</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio-2" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Free</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-radio mr-10">
                                  <div class="radio">
                                    <input type="radio" name="radio-2" checked="checked">
                                    <div class="radio__mark">
                                      <div class="radio__icon"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Paid</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="sidebar__item">
                            <h5 class="sidebar__title">Level</h5>
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">All Levels</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Beginner</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Intermediate</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>

                                <div class="sidebar-checkbox__title">Expert</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="sidebar__item">
                            <h5 class="sidebar__title">Languange</h5>
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">English</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">French</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">German</div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Italian</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Turkish</div>
                                <div class="sidebar-checkbox__count">(34)</div>
                              </div>

                            </div>
                            <div class="sidebar__more mt-15">
                              <a href="#" class="text-14 fw-500 underline text-purple-1">Show more</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="sidebar__item">
                            <h5 class="sidebar__title">Duration</h5>
                            <div class="sidebar-checkbox">

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">Less than 3 hours</div>
                                <div class="sidebar-checkbox__count">(18)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">4 - 7 hours</div>
                                <div class="sidebar-checkbox__count">(12)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">8 -18 hours </div>
                                <div class="sidebar-checkbox__count">(23)</div>
                              </div>

                              <div class="sidebar-checkbox__item">
                                <div class="form-checkbox">
                                  <input type="checkbox">
                                  <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                  </div>
                                </div>
                                <div class="sidebar-checkbox__title">20 + Hours</div>
                                <div class="sidebar-checkbox__count">(67)</div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row y-gap-30 side-content__wrap">

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX Design Essential Training</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                        <div>
                          <div class="px-15 rounded-200 bg-purple-1">
                            <span class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                          </div>
                        </div>

                        <div>
                          <div class="px-15 rounded-200 bg-green-1">
                            <span class="text-11 lh-1 uppercase fw-500 text-dark-1">Best sellers</span>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/3.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete Guide (2022 Edition)</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/4.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing Course Beginner to Advanced</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/5.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography Masterclass: A Complete Guide to Photography</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/6.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing 2021: Complete Guide To Instagram Growth</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/7.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender Creator: Learn 3D Modelling for Beginners</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/8.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial Analyst Training &amp; Investing Course</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/9.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography Masterclass: A Complete Guide to Photography</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/10.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/11.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete Guide (2022 Edition)</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="side-content col-xl-4 col-lg-6 col-md-4 col-sm-6">

                  <a href="courses-single-1.php" class="coursesCard -type-1 ">
                    <div class="relative">
                      <div class="coursesCard__image overflow-hidden rounded-8">
                        <img class="w-1/1" src="img/coursesCards/12.png" alt="image">
                        <div class="coursesCard__image_overlay rounded-8"></div>
                      </div>
                      <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      </div>
                    </div>

                    <div class="h-100 pt-15">
                      <div class="d-flex items-center">
                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                        <div class="d-flex x-gap-5 items-center">
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                          <div class="icon-star text-9 text-yellow-1"></div>
                        </div>
                        <div class="text-13 lh-1 ml-10">(1991)</div>
                      </div>

                      <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing Course Beginner to Advanced</div>

                      <div class="d-flex x-gap-10 items-center pt-10">

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">6 lesson</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">3h 56m</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/3.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Beginner</div>
                        </div>

                      </div>

                      <div class="coursesCard-footer">
                        <div class="coursesCard-footer__author">
                          <img src="img/general/avatar-1.png" alt="image">
                          <div>Ali Tufan</div>
                        </div>

                        <div class="coursesCard-footer__price">
                          <div>$179</div>
                          <div>$79</div>
                        </div>
                      </div>
                    </div>
                  </a>


                  <div class="side-content__item">
                    <div class="px-30 pt-20 pb-30 bg-white rounded-8 border-light shadow-2">
                      <div class="text-18 lh-16 text-dark-1">Complete Python Bootcamp From Zero to Hero in Python</div>

                      <div class="row x-gap-10 y-gap-10 items-center pt-15">

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/1.svg" alt="icon">
                            <div class="text-14 lh-1">6 lesson</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/2.svg" alt="icon">
                            <div class="text-14 lh-1">3h 56m</div>
                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <img class="mr-8" src="img/coursesCards/icons/3.svg" alt="icon">
                            <div class="text-14 lh-1">Beginner</div>
                          </div>
                        </div>

                      </div>

                      <div class="d-inline-block px-15 py-5 bg-green-1 text-dark-1 rounded-200 text-11 fw-500 uppercase mt-20">BEST SELLER</div>

                      <p class="text-dark-1 mt-15">Learn the #1 most important building block of all art, Drawing. This course will teach you how to draw like a pro!</p>

                      <div class="row y-gap-15 pt-15">

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              You will be able to add UX designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Become a UI designer.
                            </div>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-flex items-center">
                            <div class="size-20 d-flex items-center justify-center rounded-full border-light">
                              <div class="icon-check text-6"></div>
                            </div>
                            <div class="ml-10">
                              Build &amp; test a full website design.
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row x-gap-20 y-gap-15 items-center pt-30">
                        <div class="col">
                          <button class="button -md h-60 -purple-1 text-white col-12">Add To Cart</button>
                        </div>
                        <div class="col-auto">
                          <div class="d-flex items-center justify-center size-60 rounded-full border-light">
                            <div class="icon-bookmark text-20 text-purple-1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row justify-center pt-90 lg:pt-50">
                <div class="col-auto">
                  <div class="pagination -buttons">
                    <button class="pagination__button -prev">
                      <i class="icon icon-chevron-left"></i>
                    </button>

                    <div class="pagination__count">
                      <a href="#">1</a>
                      <a class="-count-is-active" href="#">2</a>
                      <a href="#">3</a>
                      <span>...</span>
                      <a href="#">67</a>
                    </div>

                    <button class="pagination__button -next">
                      <i class="icon icon-chevron-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer -type-1 bg-dark-1 -green-links">
        <div class="container">
          <div class="footer-header">
            <div class="row y-gap-20 justify-between items-center">
              <div class="col-auto">
                <div class="footer-header__logo">
                  <img src="img/general/Logo-Business-Unit-Dark.png" alt="logo">
                </div>
              </div>
              <div class="col-auto">
                <div class="footer-header-socials">
                  <div class="footer-header-socials__title text-white">Follow us on social media</div>
                  <div class="footer-header-socials__list">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-instagram"></i></a>
                    <a href="#"><i class="icon-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="footer-columns">
            <div class="row y-gap-30">
              <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="text-17 fw-500 text-white uppercase mb-25">ABOUT</div>
                <div class="d-flex y-gap-10 flex-column">
                  <a href="about-1.php">About Us</a>
                  <a href="blog-list-1.php">Learner Stories</a>
                  <a href="instructor-become.php">Careers</a>
                  
                  
                  <a href="contact-1.php">Contact Us</a>
                </div>
              </div>

              <div class="col-xl-4 col-lg-8">
                <div class="text-17 fw-500 text-white uppercase mb-25">SERVICES</div>
                <div class="row justify-between y-gap-20">
                  <div class="col-md-6">
                    <div class="d-flex y-gap-10 flex-column">
                      <a href="courses-list-1.php">Training Programs</a>

                      <a href="service-1.php">Consultation Services</a>

                      <a href="service-2.php">Projects and Technical Solutions</a>

                      
                      
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="d-flex y-gap-10 flex-column">
                      <a href="service-3.php">Research and Studies</a>

                      <a href="service-4.php">Academic Programs Accreditation</a>

                      <a href="service-5.php">Resources Utilization</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-2 offset-xl-1 col-lg-4 col-md-6">
                <div class="text-17 fw-500 text-white uppercase mb-25">SUPPORT</div>
                <div class="d-flex y-gap-10 flex-column">
                  <a href="terms.php">Documentation</a>
                  <a href="help-center.php">FAQS</a>
                  <a href="dashboard.php">Dashboard</a>
                  <a href="backend/html/index.php">Backend</a>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="text-17 fw-500 text-white uppercase mb-25">GET IN TOUCH</div>
                <div class="footer-columns-form">
                  <div>We don’t send spam so don’t worry.</div>
                  <form action="post">
                    <div class="form-group">
                      <input type="text" placeholder="Email...">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="py-30 border-top-light-15">
            <div class="row justify-between items-center y-gap-20">
              <div class="col-auto">
                <div class="d-flex items-center h-100 text-white">
                  © 2024 | College of Computer and Information Sciences BUSINESS UNIT | All Right Reserved.
                </div>
              </div>

              <div class="col-auto">
                <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
                  <div>
                    <div class="d-flex x-gap-15 text-white">
                      <a href="help-center.php">Help</a>
                      <a href="terms.php">Privacy Policy</a>
                      <a href="terms.php">Cookie Notice</a>
                      <a href="terms.php">Security</a>
                      <a href="terms.php">Terms of Use</a>
                    </div>
                  </div>

                  <div>
                    <a href="#" class="button px-30 h-50 -dark-6 rounded-200 text-white">
                      <i class="icon-worldwide text-20 mr-15"></i><span class="text-15">English</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>


    </div>
  </main>

  <!-- JavaScript -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>
</body>

</html>