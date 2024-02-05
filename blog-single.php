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
            <div class="row justify-center text-center">
              <div class="col-auto">
                <div data-anim="slide-up delay-1">
                  <div class="text-14 text-purple-1 uppercase fw-500 mb-8">EDUCATION</div>


                  <h1 class="page-header__title lh-14">Getting Started The Web<br>Development JavaScript in 2022</h1>


                  <p class="page-header__text">August 10, 2022</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="layout-pt-md">
        <div class="container">
          <div class="ratio ratio-16:9 rounded-8 bg-image js-lazy" data-bg="img/blog/blog-single/images.png"></div>
        </div>
      </section>

      <section class="layout-pt-md layout-pb-lg">
        <div class="container">
          <div class="blogSection">
            <div class="blogCard">
              <div class="row justify-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                  <div class="blogCard__content">
                    <h4 class="text-18 fw-500">What makes a good brand book?</h4>
                    <p class="mt-30">Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Semper risus in hendrerit gravida rutrum quisque non. At urna condimentum mattis pellentesque id nibh tortor. A erat nam at lectus urna duis convallis convallis tellus. Sit amet mauris commodo quis imperdiet massa. Vitae congue eu consequat ac felis.</p>

                    <ul class="ul-list y-gap-10 mt-30">
                      <li>Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida.</li>
                      <li>At urna condimentum mattis pellentesque id nibh. Laoreet non curabitur</li>
                      <li>Magna etiam tempor orci eu lobortis elementum.</li>
                      <li>Bibendum est ultricies integer quis. Semper eget duis at tellus.</li>
                    </ul>

                    <!-- <div class="py-25 pl-90 lg:pl-80 md:px-32 border-left-2-accent text-center mt-30 lg:mt-40">
                  <div class="">
                    <i class="icon icon-quote"></i>
                  </div>

                  <div class="text-dark-1 fw-500 italic text-2xl lh-17">
                    “Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris.“
                  </div>
                </div> -->

                    <p class="mt-30">
                      Donec purus posuere nullam lacus aliquam egestas arcu. A egestas a, tellus massa, ornare vulputate. Erat enim eget laoreet ullamcorper lectus aliquet nullam tempus id. Dignissim convallis quam aliquam rhoncus, lectus nullam viverra. Bibendum dignissim tortor, phasellus pellentesque commodo, turpis vel eu. Donec consectetur ipsum nibh lobortis elementum mus velit tincidunt elementum. Ridiculus eu convallis eu mattis iaculis et, in dolor. Sem libero, tortor suspendisse et, purus euismod posuere sit. Risus dui ut viverra venenatis ipsum tincidunt non, proin. Euismod pharetra sit ac nisi. Erat lacus, amet quisque urna faucibus. Rhoncus praesent faucibus rhoncus nec adipiscing tristique sed facilisis velit.
                      <br><br>
                      Neque nulla porta ut urna rutrum. Aliquam cursus arcu tincidunt mus dictum sit euismod cum id. Dictum integer ultricies arcu fermentum fermentum sem consectetur. Consectetur eleifend aenean eu neque euismod amet parturient turpis vitae. Faucibus ipsum felis et duis fames.
                    </p>
                  </div>

                  <div class="row y-gap-30 pt-30">
                    <div class="col-sm-6">
                      <img src="img/blog/blog-single/1.png" alt="image" class="w-1/1 initial-img rounded-8">
                    </div>
                    <div class="col-sm-6">
                      <img src="img/blog/blog-single/2.png" alt="image" class="w-1/1 initial-img rounded-8">
                    </div>
                  </div>

                  <div class="blogCard__content pt-30">
                    <p>
                      Donec purus posuere nullam lacus aliquam egestas arcu. A egestas a, tellus massa, ornare vulputate. Erat enim eget laoreet ullamcorper lectus aliquet nullam tempus id. Dignissim convallis quam aliquam rhoncus, lectus nullam viverra. Bibendum dignissim tortor, phasellus pellentesque commodo, turpis vel eu. Donec consectetur ipsum nibh lobortis elementum mus velit tincidunt elementum. Ridiculus eu convallis eu mattis iaculis et, in dolor. Sem libero, tortor suspendisse et, purus euismod posuere sit. Risus dui ut viverra venenatis ipsum tincidunt non, proin. Euismod pharetra sit ac nisi. Erat lacus, amet quisque urna faucibus. Rhoncus praesent faucibus rhoncus nec adipiscing tristique sed facilisis velit.
                      <br><br>
                      Neque nulla porta ut urna rutrum. Aliquam cursus arcu tincidunt mus dictum sit euismod cum id. Dictum integer ultricies arcu fermentum fermentum sem consectetur. Consectetur eleifend aenean eu neque euismod amet parturient turpis vitae. Faucibus ipsum felis et duis fames.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row justify-center pt-30">
              <div class="col-xl-8 col-lg-9 col-md-11">
                <div class="row y-gap-20 justify-between items-center">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="lh-1 text-dark-1 fw-500 mr-30">Share</div>

                      <div class="d-flex x-gap-15">
                        <a href="#">Fb</a>
                        <a href="#">Tw</a>
                        <a href="#">In</a>
                        <a href="#">Ln</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="row x-gap-10 y-gap-10">

                      <div class="col-auto">
                        <a href="#" class="badge -sm -light-3 text-11 text-dark-1">Courses</a>
                      </div>

                      <div class="col-auto">
                        <a href="#" class="badge -sm -light-3 text-11 text-dark-1">Learn</a>
                      </div>

                      <div class="col-auto">
                        <a href="#" class="badge -sm -light-3 text-11 text-dark-1">Online</a>
                      </div>

                      <div class="col-auto">
                        <a href="#" class="badge -sm -light-3 text-11 text-dark-1">LMS</a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row justify-center pt-30">
              <div class="col-xl-8 col-lg-9 col-md-11">
                <div class="d-flex border-bottom-light border-top-light py-30">
                  <div class="">
                    <div class="bg-image size-70 rounded-full js-lazy" data-bg="img/blog/blog-single/author.png"></div>
                  </div>

                  <div class="ml-30 md:ml-20">
                    <h4 class="text-17 lh-15 fw-500">Brooklyn Simmons</h4>
                    <div class="mt-5">Medical Assistant</div>
                    <p class="mt-25">Etiam vitae leo et diam pellentesque porta. Sed eleifend ultricies risus, vel rutrum erat commodo ut. Praesent finibus congue euismod. Nullam scelerisque massa vel augue placerat, a tempor sem egestas. Curabitur placerat finibus lacus.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row justify-center">
              <div class="col-xl-8 col-lg-9 col-md-11">
                <div class="border-bottom-light py-30">
                  <div class="row x-gap-50 justify-between items-center">
                    <div class="col-md-4 col-6">
                      <a href="blog-single.php" class="related-nav__item -prev decoration-none">
                        <div class="related-nav__arrow">
                          <i class="icon size-20 pt-5" data-feather="arrow-left"></i>
                        </div>
                        <div class="related-nav__content">
                          <div class="text-17 text-dark-1 fw-500">Prev</div>
                          <p class="text-dark-1 mt-8">5 awesome steps to get rid of stress and routine</p>
                        </div>
                      </a>
                    </div>

                    <div class="col-auto lg:d-none">
                      <div class="related-nav__icon row">

                        <div class="col-4">
                          <span></span>
                        </div>

                        <div class="col-4">
                          <span></span>
                        </div>

                        <div class="col-4">
                          <span></span>
                        </div>

                        <div class="col-4">
                          <span></span>
                        </div>

                        <div class="col-4">
                          <span></span>
                        </div>

                        <div class="col-4">
                          <span></span>
                        </div>

                        <div class="col-4">
                          <span></span>
                        </div>

                        <div class="col-4">
                          <span></span>
                        </div>

                        <div class="col-4">
                          <span></span>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-4 col-6 d-flex justify-end">
                      <a href="blog-single.php" class="related-nav__item -next text-right decoration-none">
                        <div class="related-nav__content">
                          <div class="text-17 text-dark-1 fw-500">Next</div>
                          <p class="text-dark-1 mt-8">Happy clients leave positive feedback less often</p>
                        </div>
                        <div class="related-nav__arrow">
                          <i class="icon size-20 pt-5" data-feather="arrow-right"></i>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row justify-center pt-30">
              <div class="col-xl-8 col-lg-9 col-md-11">
                <div class="blogPost -comments">
                  <div class="blogPost__content">
                    <h2 class="text-20 fw-500">
                      Reviews
                    </h2>

                    <ul class="comments__list mt-30">
                      <li class="comments__item">
                        <div class="comments__item-inner md:direction-column">
                          <div class="comments__img mr-20">
                            <div class="bg-image rounded-full js-lazy" data-bg="img/avatars/1.png"></div>
                          </div>

                          <div class="comments__body md:mt-15">
                            <div class="comments__header">
                              <h4 class="text-17 fw-500 lh-15">
                                Ali Tufan
                                <span class="text-13 text-light-1 fw-400">3 Days ago</span>
                              </h4>

                              <div class="stars"></div>
                            </div>

                            <h5 class="text-15 fw-500 mt-15">The best LMS Design</h5>
                            <div class="comments__text mt-10">
                              <p>This course is a very applicable. Professor Ng explains precisely each algorithm and even tries to give an intuition for mathematical and statistic concepts behind each algorithm. Thank you very much.</p>
                            </div>

                            <div class="comments__helpful mt-20">
                              <span class="text-13 text-purple-1">Was this review helpful?</span>
                              <button class="button text-13 -sm -purple-1 text-white">Yes</button>
                              <button class="button text-13 -sm -light-7 text-purple-1">No</button>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="comments__item">
                        <div class="comments__item-inner md:direction-column">
                          <div class="comments__img mr-20">
                            <div class="bg-image rounded-full js-lazy" data-bg="img/avatars/1.png"></div>
                          </div>

                          <div class="comments__body md:mt-15">
                            <div class="comments__header">
                              <h4 class="text-17 fw-500 lh-15">
                                Ali Tufan
                                <span class="text-13 text-light-1 fw-400">3 Days ago</span>
                              </h4>

                              <div class="stars"></div>
                            </div>

                            <h5 class="text-15 fw-500 mt-15">The best LMS Design</h5>
                            <div class="comments__text mt-10">
                              <p>This course is a very applicable. Professor Ng explains precisely each algorithm and even tries to give an intuition for mathematical and statistic concepts behind each algorithm. Thank you very much.</p>
                            </div>

                            <div class="comments__helpful mt-20">
                              <span class="text-13 text-purple-1">Was this review helpful?</span>
                              <button class="button text-13 -sm -purple-1 text-white">Yes</button>
                              <button class="button text-13 -sm -light-7 text-purple-1">No</button>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="respondForm pt-30">
                  <h3 class="text-20 fw-500">
                    Write a Review
                  </h3>

                  <div class="mt-30">
                    <h4 class="text-16 fw-500">What is it like to Course?</h4>
                    <div class="d-flex x-gap-10 pt-10">
                      <div class="icon-star text-14 text-yellow-1"></div>
                      <div class="icon-star text-14 text-yellow-1"></div>
                      <div class="icon-star text-14 text-yellow-1"></div>
                      <div class="icon-star text-14 text-yellow-1"></div>
                      <div class="icon-star text-14 text-yellow-1"></div>
                    </div>
                  </div>

                  <form class="contact-form respondForm__form row y-gap-30 pt-30" action="#">
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Review Title</label>
                      <input type="text" name="title" placeholder="Great Courses">
                    </div>
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Review Content</label>
                      <textarea name="comment" placeholder="Message" rows="8"></textarea>
                    </div>
                    <div class="col-12">
                      <button type="submit" name="submit" id="submit" class="button -md -purple-1 text-white">
                        Submit Review
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="layout-pt-lg layout-pb-lg bg-light-4">
        <div data-anim-wrap class="container">
          <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
            <div class="col-auto">

              <div class="sectionTitle ">

                <h2 class="sectionTitle__title ">Related Posts</h2>

                <p class="sectionTitle__text ">10,000+ unique online course list designs</p>

              </div>

            </div>
          </div>

          <div class="row y-gap-30 pt-60">

            <div class="col-lg-3 col-md-6">
              <div data-anim-child="slide-up delay-2" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img src="img/home-3/blog/1.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <a href="blog-single.php" class="blogCard__category">EDUCATION</a>
                  <h4 class="blogCard__title text-17 lh-15 mt-5">Eco-Education in Our Lives: We Can Change the Future</h4>
                  <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div data-anim-child="slide-up delay-3" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img src="img/home-3/blog/2.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <a href="blog-single.php" class="blogCard__category">EDUCATION</a>
                  <h4 class="blogCard__title text-17 lh-15 mt-5">Eco-Education in Our Lives: We Can Change the Future</h4>
                  <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div data-anim-child="slide-up delay-4" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img src="img/home-3/blog/3.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <a href="blog-single.php" class="blogCard__category">EDUCATION</a>
                  <h4 class="blogCard__title text-17 lh-15 mt-5">Eco-Education in Our Lives: We Can Change the Future</h4>
                  <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div data-anim-child="slide-up delay-5" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img src="img/home-3/blog/4.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <a href="blog-single.php" class="blogCard__category">EDUCATION</a>
                  <h4 class="blogCard__title text-17 lh-15 mt-5">Eco-Education in Our Lives: We Can Change the Future</h4>
                  <div class="blogCard__date text-14 mt-5">December 16, 2022</div>
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