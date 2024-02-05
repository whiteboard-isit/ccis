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


      <!-- About Section -->
      <section class="layout-pt-lg layout-pb-lg js-mouse-move-container">
        <div class="container">
          <div class="row y-gap-30 items-center">
            <div class="col-lg-6 order-2 order-lg-1">
              <h2 class="text-45 lg:text-40 md:text-30 text-dark-1">About CCIS<br class="xl:d-none"> BUSINESS UNIT</h2>
              <p class="text-dark-1 mt-20">Use the list below to bring attention to your product’s key<br class="lg:d-none"> differentiator.</p>

              <div class="row y-gap-30 pt-60 lg:pt-40">

                <div class="col-12">
                  <div class="featureIcon -type-1">
                    <div class="featureIcon__icon bg-green-2">
                      <img src="img/home-2/learning/icons/1.svg" alt="icon">
                    </div>

                    <div class="featureIcon__content ml-30 md:ml-20">
                      <h4 class="text-17 fw-500">Vision</h4>
                      <p class="mt-5">Leadership and excellence locally and regionally in providing <br> advisory services and smart solutions in the fields of <br>Information Technology.</p>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="featureIcon -type-1">
                    <div class="featureIcon__icon bg-purple-2">
                      <img src="img/home-2/learning/icons/2.svg" alt="icon">
                    </div>

                    <div class="featureIcon__content ml-30 md:ml-20">
                      <h4 class="text-17 fw-500">Mission</h4>
                      <p class="mt-5">Enhancing the contribution of the College of Computer and Information Sciences to the development of the knowledge economy through distinguished and diversified training, technical and advisory services in order to achieve sustainable development that allows the transfer of knowledge between the college’s faculty and private and public sectors.</p>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="featureIcon -type-1">
                    <div class="featureIcon__icon bg-orange-2">
                      <img src="img/home-2/learning/icons/3.svg" alt="icon">
                    </div>

                    <div class="featureIcon__content ml-30 md:ml-20">
                      <h4 class="text-17 fw-500">Objectives</h4>
                      <p class="mt-5">•	Establishing a unified point of contact that allows private/public sectors to benefit from the expertise of the college’s faculty.  <br>
                        •	Reducing the gap between the college and the industrial and technical environment. <br>
                        •	Building sustainable partnerships with governmental and private sectors. <br>

                      </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
              <div class="elements-image">
                <div class="elements-image__img1">
                  <img class="js-mouse-move" data-move="40" src="img/home-2/learning/1.png" alt="image" style="transform: translate(19.6427px, -71.4583px);">
                </div>

                <div class="elements-image__img2">
                  <img class="js-mouse-move" data-move="70" src="img/home-2/learning/2.png" alt="image" style="transform: translate(34.3747px, -125.052px);">
                </div>

                <div data-move="60" class="elements-image__el1 lg:d-none img-el -w-260 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move" style="transform: translate(29.464px, -107.188px);">
                  <div class="img-el__side">
                    <div class="size-50 d-flex justify-center items-center bg-purple-1 rounded-full">
                      <img src="img/masthead/3.svg" alt="icon">
                    </div>
                  </div>
                  <div class="">
                    <div class="text-purple-1 text-16 fw-500 lh-1" style="text-align: center;">Projects and Technical Solutions</div>
                    
                  </div>
                </div>

                <div data-move="30" class="elements-image__el2 lg:d-none img-el -w-250 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move" style="transform: translate(14.732px, -53.5937px);">
                  <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                    <img src="img/masthead/1.svg" alt="icon">
                  </div>
                  <div class="ml-20">
                    <div class="text-orange-1 text-16 fw-500 lh-1">300 +</div>
                    <div class="mt-3"> Courses</div>
                  </div>
                </div>

                <div data-move="30" class="elements-image__el3 sm:d-none shadow-4 img-el -w-260 px-30 py-20 d-flex items-center bg-white rounded-8 js-mouse-move" style="transform: translate(14.732px, -53.5937px);">
                  <div class="img-el__side">
                    <div class="size-50 d-flex justify-center items-center bg-purple-1 rounded-full">
                      <img src="img/masthead/2.svg" alt="icon">
                    </div>
                  </div>
                  <div class="">
                    <div class="text-purple-1 text-16 fw-500 lh-1" style="text-align: center;">Academic Programs Accreditation</div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




      <section class="layout-pt-lg layout-pb-lg bg-dark-2">
        <div data-anim-wrap class="container">
          <div class="row justify-center text-center">
            <div data-anim-child="slide-up delay-1" class="col-auto">

              <div class="sectionTitle ">

                <h2 class="sectionTitle__title text-white">Why learn with our courses?</h2>

                <p class="sectionTitle__text text-white">Lorem ipsum dolor sit amet, consectetur.</p>

              </div>

            </div>
          </div>

          <div class="row y-gap-30 pt-50">

            <div data-anim-child="slide-up delay-2" class="col-lg-4 col-md-6">
              <div class="stepCard -type-1 -stepCard-hover">
                <div class="stepCard__content">
                  <div class="stepCard__icon">
                    <i class="icon-online-learning-4 text-64 text-green-1"></i>
                  </div>
                  <h4 class="stepCard__title">01. Learn</h4>
                  <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
                </div>
              </div>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <div class="stepCard -type-1 -stepCard-hover">
                <div class="stepCard__content">
                  <div class="stepCard__icon">
                    <i class="icon-graduation-1 text-64 text-green-1"></i>
                  </div>
                  <h4 class="stepCard__title">02. Graduate</h4>
                  <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
                </div>
              </div>
            </div>

            <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
              <div class="stepCard -type-1 -stepCard-hover">
                <div class="stepCard__content">
                  <div class="stepCard__icon">
                    <i class="icon-working-at-home-2 text-64 text-green-1"></i>
                  </div>
                  <h4 class="stepCard__title">03. Work</h4>
                  <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Instructors Section -->   
      <section class="layout-pt-lg layout-pb-lg ">
        <div class="container">
          <div class="row y-gap-50">
            <div class="col-xl-3 col-lg-4 col-md-8">

              <div class="sectionTitle ">

                <h2 class="sectionTitle__title ">Learn from the best instructors</h2>

                <p class="sectionTitle__text ">Provide training courses and workshops in the latest information technology disciplines </p>

              </div>


              <div class="d-inline-block">

                <a href="instructors-list-1.php" class="button -icon -blue-2 text-blue-1 mt-30">
                  View All Instructors
                  <i class="icon-arrow-top-right text-13 ml-10"></i>
                </a>

              </div>
            </div>

            <div class="offset-xl-1 col-lg-8">
              <div class="overflow-hidden js-section-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden" data-loop="" data-pagination="" data-slider-cols="xl-3 lg-3 md-2 sm-2">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-850px, 0px, 0px); height: 328px;" id="swiper-wrapper-eddc344d0191f8bb" aria-live="polite"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="1 / 3" style="width: 283.333px;" data-swiper-slide-index="0">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/1.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Mohammad Ali</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="2 / 3" style="width: 283.333px;" data-swiper-slide-index="1">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/2.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Abdullah Alrashidy</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" role="group" aria-label="3 / 3" style="width: 283.333px;" data-swiper-slide-index="2">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/3.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Hanan Bin Ahmed</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="1 / 3" style="width: 283.333px;" data-swiper-slide-index="0">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/1.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Mohammad Ali</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="2 / 3" style="width: 283.333px;" data-swiper-slide-index="1">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/2.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Abdullah Alrashidy</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide-visible swiper-slide-duplicate-prev" role="group" aria-label="3 / 3" style="width: 283.333px;" data-swiper-slide-index="2">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/3.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Hanan Bin Ahmed</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div>

                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="1 / 3" style="width: 283.333px;" data-swiper-slide-index="0">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/1.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Mohammad Ali</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="2 / 3" style="width: 283.333px;" data-swiper-slide-index="1">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/2.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Abdullah Alrashidy</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="3 / 3" style="width: 283.333px;" data-swiper-slide-index="2">
                    <div class="d-flex flex-column items-center">
                      <div>
                        <img src="img/speakers/3.png" alt="image">
                      </div>
                      <div class="d-flex items-center mt-20">
                        <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                        <div class="text-yellow-1">4.5</div>
                      </div>
                      <h5 class="text-17 fw-500 mt-10">Hanan Bin Ahmed</h5>
                      <p class="mt-5">Computer Science Instructor</p>

                      <div class="d-flex x-gap-15 items-center pt-5">

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">692 Students</div>
                        </div>

                        <div class="d-flex items-center">
                          <div class="mr-10">
                            <img src="img/team/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-13 lh-1">15 Course</div>
                        </div>

                      </div>
                    </div>
                  </div></div>

                <div class="d-flex justify-center x-gap-15 items-center pt-60 lg:pt-40">
                  <div class="col-auto">
                    <div class="pagination -arrows js-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><div class="pagination__item is-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></div><div class="pagination__item" tabindex="0" role="button" aria-label="Go to slide 2"></div><div class="pagination__item" tabindex="0" role="button" aria-label="Go to slide 3"></div></div>
                  </div>
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonials Section -->  
      <section class="layout-pt-lg layout-pb-lg section-bg">
        <div class="section-bg__item bg-light-6"></div>

        <div class="container">
          <div class="row y-gap-20 justify-center text-center">
            <div class="col-auto">

              <div class="sectionTitle ">

                <h2 class="sectionTitle__title ">Testimonials</h2>

                <p class="sectionTitle__text ">10,000+ unique online course list designs</p>

              </div>

            </div>
          </div>

          <div class="row justify-center pt-60">
            <div class="col-xl-6 col-lg-8 col-md-10">
              <div class="overflow-hidden js-testimonials-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-ad9450a94297047d" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-630px, 0px, 0px);"><div class="swiper-slide h-100 swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 630px;">
                    <div data-anim="slide-up" class="testimonials -type-2 text-center is-in-view">
                      <div class="testimonials__icon">
                        <img src="img/misc/quote.svg" alt="quote">
                      </div>
                      <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this CCIS
BUSINESS UNIT experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                      <div class="testimonials__author">
                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                        <div class="mt-5">Student</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide h-100 swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 630px;">
                    <div data-anim="slide-up" class="testimonials -type-2 text-center is-in-view">
                      <div class="testimonials__icon">
                        <img src="img/misc/quote.svg" alt="quote">
                      </div>
                      <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this CCIS
BUSINESS UNIT experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                      <div class="testimonials__author">
                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                        <div class="mt-5">Student</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide h-100 swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 630px;">
                    <div data-anim="slide-up" class="testimonials -type-2 text-center is-in-view">
                      <div class="testimonials__icon">
                        <img src="img/misc/quote.svg" alt="quote">
                      </div>
                      <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this CCIS
BUSINESS UNIT experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                      <div class="testimonials__author">
                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                        <div class="mt-5">Student</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide h-100" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 630px;">
                    <div data-anim="slide-up" class="testimonials -type-2 text-center is-in-view">
                      <div class="testimonials__icon">
                        <img src="img/misc/quote.svg" alt="quote">
                      </div>
                      <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this CCIS
BUSINESS UNIT experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                      <div class="testimonials__author">
                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                        <div class="mt-5">Student</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide h-100" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 630px;">
                    <div data-anim="slide-up" class="testimonials -type-2 text-center is-in-view">
                      <div class="testimonials__icon">
                        <img src="img/misc/quote.svg" alt="quote">
                      </div>
                      <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this CCIS
BUSINESS UNIT experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                      <div class="testimonials__author">
                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                        <div class="mt-5">Student</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide h-100 swiper-slide-duplicate-prev" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 630px;">
                    <div data-anim="slide-up" class="testimonials -type-2 text-center is-in-view">
                      <div class="testimonials__icon">
                        <img src="img/misc/quote.svg" alt="quote">
                      </div>
                      <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this CCIS
BUSINESS UNIT experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                      <div class="testimonials__author">
                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                        <div class="mt-5">Student</div>
                      </div>
                    </div>
                  </div>

                <div class="swiper-slide h-100 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 630px;">
                    <div data-anim="slide-up" class="testimonials -type-2 text-center is-in-view">
                      <div class="testimonials__icon">
                        <img src="img/misc/quote.svg" alt="quote">
                      </div>
                      <div class="testimonials__text md:text-20 fw-500 text-dark-1">It is no exaggeration to say this CCIS
BUSINESS UNIT experience was transformative–both professionally and personally. This workshop will long remain a high point of my life.</div>
                      <div class="testimonials__author">
                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                        <div class="mt-5">Student</div>
                      </div>
                    </div>
                  </div></div>

                <div class="">
                  <div class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">

                    <div class="col-auto">
                      <div class="pagination__item is-active">
                        <img src="img/home-3/testimonials/1.png" alt="image">
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="pagination__item ">
                        <img src="img/home-3/testimonials/2.png" alt="image">
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="pagination__item ">
                        <img src="img/home-3/testimonials/3.png" alt="image">
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="pagination__item ">
                        <img src="img/home-3/testimonials/4.png" alt="image">
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="pagination__item ">
                        <img src="img/home-3/testimonials/5.png" alt="image">
                      </div>
                    </div>

                  </div>
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
          </div>
        </div>
      </section>


      <section class="layout-pt-lg layout-pb-lg  relative">
        <div class="section-bg__item">
          <img class="img-full rounded-16" src="img/home-3/cta/bg.png" alt="image">
        </div>
        

        <div data-anim-wrap="" class="container animated">
          <div class="row">
            <div class="col-xl-6 col-lg-6">

              <div class="sectionTitle ">

                <h2 class="sectionTitle__title text-white">Become an Instructors</h2>

                <p class="sectionTitle__text text-white">Share your skills with best Online courses</p>

              </div>


              <div class="row x-gap-20 y-gap-20 pt-60 lg:pt-40">
                

                <div class="col-auto">
                  <a href="instructors-become.php" class="button -md -purple-1 text-white">Get Started Now</a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">

              <div class="side-image-instructors pr-25 lg:d-none">
                <img src="img/home-5/cta/img.png" alt="image">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Partners Section -->
      <section class="layout-pt-sm layout-pb-sm bg-light-6">
        <div class="container">

          <div class="row justify-center text-center mb-50">
            <div class="col-auto">

              <div class="sectionTitle ">

                <h2 class="sectionTitle__title ">Top Categories</h2>

               

              </div>

            </div>
          </div>
          
          <div class="row y-gap-30 justify-between sm:justify-start items-center">

            <div class="col-lg-auto col-md-2 col-sm-3 col-4">
              <div class="d-flex justify-center items-center px-4">
                <img class="w-1/1" src="img/clients/1.svg" alt="clients image">
              </div>
            </div>

            <div class="col-lg-auto col-md-2 col-sm-3 col-4">
              <div class="d-flex justify-center items-center px-4">
                <img class="w-1/1" src="img/clients/2.svg" alt="clients image">
              </div>
            </div>

            <div class="col-lg-auto col-md-2 col-sm-3 col-4">
              <div class="d-flex justify-center items-center px-4">
                <img class="w-1/1" src="img/clients/3.svg" alt="clients image">
              </div>
            </div>

            <div class="col-lg-auto col-md-2 col-sm-3 col-4">
              <div class="d-flex justify-center items-center px-4">
                <img class="w-1/1" src="img/clients/4.svg" alt="clients image">
              </div>
            </div>

            <div class="col-lg-auto col-md-2 col-sm-3 col-4">
              <div class="d-flex justify-center items-center px-4">
                <img class="w-1/1" src="img/clients/5.svg" alt="clients image">
              </div>
            </div>

            <div class="col-lg-auto col-md-2 col-sm-3 col-4">
              <div class="d-flex justify-center items-center px-4">
                <img class="w-1/1" src="img/clients/6.svg" alt="clients image">
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