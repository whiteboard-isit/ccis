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

  <!-- barba container start -->
  <div class="barba-container" data-barba="container">


    <main class="main-content">


      <header class="header -dashboard -dark-bg-dark-1 js-header">
        <div class="header__container py-20 px-30">
          <div class="row justify-between items-center">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="header__explore text-dark-1">
                  <button class="d-flex items-center js-dashboard-home-9-sidebar-toggle">
                    <i class="icon -dark-text-white icon-explore"></i>
                  </button>
                </div>

                <div class="header__logo ml-30 md:ml-20">
                  <a data-barba href="index.php">
                    <img class="-light-d-none" src="img/general/Logo-Business-Unit-Dark.png" alt="logo">
                    <img class="-dark-d-none" src="img/general/Logo-Business-Unit-Light.png" alt="logo">
                  </a>
                </div>
              </div>
            </div>

            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="text-white d-flex items-center lg:d-none mr-15">
                  <div class="dropdown bg-transparent px-0 py-0">
                    <div class="d-flex items-center text-14 text-dark-1">
                      All Pages <i class="text-9 icon-chevron-down ml-10"></i>
                    </div>
                    <div class="dropdown__item -dark-bg-dark-2 -dark-border-white-10">
                      <div class="text-14 y-gap-15">
                        <div><a href="dashboard.php" class="d-block text-dark-1">Dashboard</a></div>
                        <div><a href="dshb-courses.php" class="d-block text-dark-1">My Courses</a></div>
                        <div><a href="dshb-bookmarks.php" class="d-block text-dark-1">Bookmarks</a></div>
                        <div><a href="dshb-listing.php" class="d-block text-dark-1">Add Listing</a></div>
                        <div><a href="dshb-reviews.php" class="d-block text-dark-1">Reviews</a></div>
                        <div><a href="dshb-settings.php" class="d-block text-dark-1">Settings</a></div>
                      </div>
                    </div>
                  </div>

                  <div class="relative">
                    <a href="#" class="d-flex items-center text-dark-1 ml-20" data-el-toggle=".js-courses-toggle">
                      My Courses <i class="text-9 icon-chevron-down ml-10"></i>
                    </a>

                    <div class="toggle-element js-courses-toggle">
                      <div class="toggle-bottom -courses bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-20">
                        <div class="px-30 py-30">

                          <div class="d-flex mb-20">
                            <img class="size-80 fit-cover" src="img/menus/cart/1.png" alt="image">

                            <div class="ml-15">
                              <div class="text-dark-1 lh-15 fw-500">Complete Python Bootcamp From Zero to Hero in Python</div>
                              <div class="progress-bar mt-20">
                                <div class="progress-bar__bg bg-light-3"></div>
                                <div class="progress-bar__bar bg-purple-1 w-1/3"></div>
                              </div>
                            </div>
                          </div>

                          <div class="d-flex mb-20">
                            <img class="size-80 fit-cover" src="img/menus/cart/2.png" alt="image">

                            <div class="ml-15">
                              <div class="text-dark-1 lh-15 fw-500">The Ultimate Drawing Course Beginner to Advanced</div>
                              <div class="progress-bar mt-20">
                                <div class="progress-bar__bg bg-light-3"></div>
                                <div class="progress-bar__bar bg-purple-1 w-1/3"></div>
                              </div>
                            </div>
                          </div>


                          <div class="mt-20">
                            <a href="#" class="button py-20 -dark-1 text-white -dark-bg-purple-1 -dark-border-dark-2 col-12">Go to My Learning</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-flex items-center sm:d-none">
                  <div class="relative">
                    <button class="js-darkmode-toggle text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                      <i class="text-24 icon icon-night"></i>
                    </button>
                  </div>

                  <div class="relative">
                    <button data-maximize class="d-flex text-light-1 items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                      <i class="text-24 icon icon-maximize"></i>
                    </button>
                  </div>


                  <div class="relative ">
                    <button class="d-flex items-center text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light" data-el-toggle=".js-cart-toggle">
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


                  <div class="relative">
                    <a href="#" class="d-flex items-center text-light-1 justify-center size-50 rounded-16 -hover-dshb-header-light" data-el-toggle=".js-msg-toggle">
                      <i class="text-24 icon icon-email"></i>
                    </a>
                  </div>

                  <div class="relative">
                    <a href="#" class="d-flex items-center text-light-1 justify-center size-50 rounded-16 -hover-dshb-header-light" data-el-toggle=".js-notif-toggle">
                      <i class="text-24 icon icon-notification"></i>
                    </a>

                    <div class="toggle-element js-notif-toggle">
                      <div class="toggle-bottom -notifications bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                        <div class="py-30 px-30">
                          <div class="y-gap-40">

                            <div class="d-flex items-center ">
                              <div class="shrink-0">
                                <img src="img/dashboard/actions/1.png" alt="image">
                              </div>
                              <div class="ml-12">
                                <h4 class="text-15 lh-1 fw-500">Your resume updated!</h4>
                                <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                              </div>
                            </div>

                            <div class="d-flex items-center border-top-light">
                              <div class="shrink-0">
                                <img src="img/dashboard/actions/2.png" alt="image">
                              </div>
                              <div class="ml-12">
                                <h4 class="text-15 lh-1 fw-500">You changed password</h4>
                                <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                              </div>
                            </div>

                            <div class="d-flex items-center border-top-light">
                              <div class="shrink-0">
                                <img src="img/dashboard/actions/3.png" alt="image">
                              </div>
                              <div class="ml-12">
                                <h4 class="text-15 lh-1 fw-500">Your account has been created successfully</h4>
                                <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                              </div>
                            </div>

                            <div class="d-flex items-center border-top-light">
                              <div class="shrink-0">
                                <img src="img/dashboard/actions/4.png" alt="image">
                              </div>
                              <div class="ml-12">
                                <h4 class="text-15 lh-1 fw-500">You applied for a job Front-end Developer</h4>
                                <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                              </div>
                            </div>

                            <div class="d-flex items-center border-top-light">
                              <div class="shrink-0">
                                <img src="img/dashboard/actions/5.png" alt="image">
                              </div>
                              <div class="ml-12">
                                <h4 class="text-15 lh-1 fw-500">Your course uploaded successfully</h4>
                                <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="relative d-flex items-center ml-10">
                  <a href="#" data-el-toggle=".js-profile-toggle">
                    <img class="size-50" src="img/misc/user-profile.png" alt="image">
                  </a>

                  <div class="toggle-element js-profile-toggle">
                    <div class="toggle-bottom -profile bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                      <div class="px-30 py-30">

                        <div class="sidebar -dashboard">

                          <div class="sidebar__item -is-active -dark-bg-dark-2">
                            <a href="dashboard.php" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                              <i class="text-20 icon-discovery mr-15"></i>
                              Dashboard
                            </a>
                          </div>

                          <div class="sidebar__item ">
                            <a href="dshb-courses.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                              <i class="text-20 icon-play-button mr-15"></i>
                              My Courses
                            </a>
                          </div>

                          <div class="sidebar__item ">
                            <a href="dshb-bookmarks.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                              <i class="text-20 icon-bookmark mr-15"></i>
                              Bookmarks
                            </a>
                          </div>

                          <div class="sidebar__item ">
                            <a href="dshb-messages.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                              <i class="text-20 icon-message mr-15"></i>
                              Messages
                            </a>
                          </div>

                          <div class="sidebar__item ">
                            <a href="dshb-listing.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                              <i class="text-20 icon-list mr-15"></i>
                              Create Course
                            </a>
                          </div>

                          <div class="sidebar__item ">
                            <a href="dshb-reviews.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                              <i class="text-20 icon-comment mr-15"></i>
                              Reviews
                            </a>
                          </div>

                          <div class="sidebar__item ">
                            <a href="dshb-settings.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                              <i class="text-20 icon-setting mr-15"></i>
                              Settings
                            </a>
                          </div>

                          <div class="sidebar__item ">
                            <a href="#" class="d-flex items-center text-17 lh-1 fw-500 ">
                              <i class="text-20 icon-power mr-15"></i>
                              Logout
                            </a>
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
      </header>


      <div class="content-wrapper js-content-wrapper">
        <div class="dashboard -home-9 js-dashboard-home-9">
          <div class="dashboard__sidebar scroll-bar-1">


            <div class="sidebar -dashboard">

              <div class="sidebar__item -is-active -dark-bg-dark-2">
                <a href="dashboard.php" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                  <i class="text-20 icon-discovery mr-15"></i>
                  Dashboard
                </a>
              </div>

              <div class="sidebar__item ">
                <a href="dshb-courses.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                  <i class="text-20 icon-play-button mr-15"></i>
                  My Courses
                </a>
              </div>

              <div class="sidebar__item ">
                <a href="dshb-bookmarks.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                  <i class="text-20 icon-bookmark mr-15"></i>
                  Bookmarks
                </a>
              </div>

              <div class="sidebar__item ">
                <a href="dshb-messages.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                  <i class="text-20 icon-message mr-15"></i>
                  Messages
                </a>
              </div>

              <div class="sidebar__item ">
                <a href="dshb-listing.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                  <i class="text-20 icon-list mr-15"></i>
                  Create Course
                </a>
              </div>

              <div class="sidebar__item ">
                <a href="dshb-reviews.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                  <i class="text-20 icon-comment mr-15"></i>
                  Reviews
                </a>
              </div>

              <div class="sidebar__item ">
                <a href="dshb-settings.php" class="d-flex items-center text-17 lh-1 fw-500 ">
                  <i class="text-20 icon-setting mr-15"></i>
                  Settings
                </a>
              </div>

              <div class="sidebar__item ">
                <a href="#" class="d-flex items-center text-17 lh-1 fw-500 ">
                  <i class="text-20 icon-power mr-15"></i>
                  Logout
                </a>
              </div>

            </div>


          </div>

          <div class="dashboard__main">
            <div class="dashboard__content bg-light-4">
              <div class="row pb-50 mb-10">
                <div class="col-auto">

                  <h1 class="text-30 lh-12 fw-700">Participants</h1>

                  <div class="breadcrumbs mt-10 pt-0 pb-0">
                    <div class="breadcrumbs__content">
                      <div class="breadcrumbs__item">
                        <a href="index.php">Home</a>
                      </div>
                      <div class="breadcrumbs__item">
                        <a href="courses-list-3.php">All courses</a>
                      </div>
                      <div class="breadcrumbs__item">
                        <a href="courses-single-1.php">User Experience Design</a>
                      </div>
                      <div class="breadcrumbs__item">
                        <a href="courses-single-1.php">User Interface</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>


              <div class="row y-gap-30">
                <div class="col-12">
                  <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                    <div class="d-flex items-center py-20 px-30 border-bottom-light">
                      <h2 class="text-17 lh-1 fw-500">Page Head</h2>
                    </div>

                    <div class="py-30 px-30">
                      <div class="border-light rounded-8">
                        <div class="d-flex items-center py-25 px-30">
                          <div class="text-dark-1 mr-15">Match</div>

                          <div class="dropdown js-dropdown js-category-active">
                            <div class="dropdown__button d-flex items-center text-14 bg-white -dark-bg-dark-2 border-light rounded-8 px-20 py-10 " data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                              <span class="js-dropdown-title">Any</span>
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

                          <div class="text-dark-1 ml-15">of the following:</div>
                        </div>

                        <div class="px-30 py-30 border-top-light">
                          <div class="bg-light-4 rounded-8 py-10 md:py-20 px-30">
                            <div class="row y-gap-20 justify-between items-center">
                              <div class="col-md-auto">
                                <div class="row x-gap-20 y-gap-10 items-center">
                                  <div class="col-auto">
                                    <div class="text-dark-1">Match</div>
                                  </div>
                                  <div class="col-md-auto">

                                    <div class="dropdown js-dropdown js-category-active">
                                      <div class="dropdown__button d-flex items-center text-14 bg-white -dark-bg-dark-1 border-light rounded-8 px-10 h-50 " data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                                        <span class="js-dropdown-title">Any</span>
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
                                  <div class="col-md-auto">

                                    <div class="dropdown js-dropdown js-category-active">
                                      <div class="dropdown__button d-flex items-center text-14 bg-white -dark-bg-dark-1 border-light rounded-8 px-10 h-50 " data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                                        <span class="js-dropdown-title">Any</span>
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
                              </div>
                              <div class="col-auto">
                                <a href="#" data-feather="x"></a>
                              </div>
                            </div>
                          </div>

                          <div class="bg-light-4 rounded-8 py-10 md:py-20 px-30 mt-10">
                            <div class="row y-gap-20 justify-between items-center">
                              <div class="col-md-auto">
                                <div class="row x-gap-20 y-gap-10 items-center">
                                  <div class="col-auto">
                                    <div class="text-dark-1">Match</div>
                                  </div>
                                  <div class="col-md-auto">

                                    <div class="dropdown js-dropdown js-category-active">
                                      <div class="dropdown__button d-flex items-center text-14 bg-white border-light -dark-bg-dark-1 rounded-8 px-10 h-50 " data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                                        <span class="js-dropdown-title">Any</span>
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
                                  <div class="col-md-auto">

                                    <div class="dropdown js-dropdown js-category-active">
                                      <div class="dropdown__button d-flex items-center text-14 bg-white border-light -dark-bg-dark-1 rounded-8 px-10 h-50 " data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                                        <span class="js-dropdown-title">Any</span>
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
                              </div>
                              <div class="col-auto">
                                <a href="#" data-feather="x"></a>
                              </div>
                            </div>
                          </div>

                          <div class="row y-gap-20 justify-between items-center pt-30">
                            <div class="col-auto">
                              <a href="#" class="text-purple-1 fw-500 underline">+ Add condition</a>
                            </div>

                            <div class="col-auto">
                              <div class="d-flex x-gap-20 y-gap-20 flex-wrap">
                                <div><button class="button h-50 px-25 -dark-1 -dark-button-white text-white">Apply Filters</button></div>
                                <div><button class="button h-50 px-25 -outline-dark-1 text-dark-1">Cancel Filters</button></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="text-18 fw-500 text-dark-1 lh-12 mt-30">First name</div>
                      <div class="d-flex x-gap-10 y-gap-10 flex-wrap pt-20">
                        <div>
                          <div class="py-8 pr-5 d-flex justify-center items-center">
                            All
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            A
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            B
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            C
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            D
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            E
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            F
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            G
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            H
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            I
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 bg-dark-1 text-white -dark-text-dark-1">
                            J
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            K
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            L
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            M
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            N
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            O
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            P
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            Q
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            R
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            S
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            T
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            U
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            V
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            W
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            X
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            Y
                          </div>
                        </div>

                        <div>
                          <div class="size-35 d-flex justify-center items-center border-light rounded-4 ">
                            Z
                          </div>
                        </div>

                      </div>

                      <div class="mt-40">
                        <div class="px-30 py-20 bg-light-7 -dark-bg-dark-2 rounded-8">
                          <div class="row x-gap-10">
                            <div class="col-lg-5">
                              <div class="text-purple-1">First name / Surname</div>
                            </div>
                            <div class="col-lg-2">
                              <div class="text-purple-1">Roles</div>
                            </div>
                            <div class="col-lg-2">
                              <div class="text-purple-1">Groups</div>
                            </div>
                            <div class="col-lg-3">
                              <div class="text-purple-1">Last access to course</div>
                            </div>
                          </div>
                        </div>


                        <div class="px-30 border-bottom-light">
                          <div class="row x-gap-10 items-center py-15">
                            <div class="col-lg-5">
                              <div class="d-flex items-center">
                                <img src="img/misc/2.png" alt="image" class="size-40 fit-cover">
                                <div class="ml-10">
                                  <div class="text-dark-1 lh-12 fw-500">Heather Reyes</div>
                                  <div class="text-14 lh-12 mt-5">10 Nov 2014</div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-2">Student</div>
                            <div class="col-lg-2">Team South</div>
                            <div class="col-lg-3">1 year 31 days</div>
                          </div>
                        </div>

                        <div class="px-30 border-bottom-light">
                          <div class="row x-gap-10 items-center py-15">
                            <div class="col-lg-5">
                              <div class="d-flex items-center">
                                <img src="img/misc/2.png" alt="image" class="size-40 fit-cover">
                                <div class="ml-10">
                                  <div class="text-dark-1 lh-12 fw-500">Heather Reyes</div>
                                  <div class="text-14 lh-12 mt-5">10 Nov 2014</div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-2">Student</div>
                            <div class="col-lg-2">Team South</div>
                            <div class="col-lg-3">1 year 31 days</div>
                          </div>
                        </div>

                        <div class="px-30 border-bottom-light">
                          <div class="row x-gap-10 items-center py-15">
                            <div class="col-lg-5">
                              <div class="d-flex items-center">
                                <img src="img/misc/2.png" alt="image" class="size-40 fit-cover">
                                <div class="ml-10">
                                  <div class="text-dark-1 lh-12 fw-500">Heather Reyes</div>
                                  <div class="text-14 lh-12 mt-5">10 Nov 2014</div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-2">Student</div>
                            <div class="col-lg-2">Team South</div>
                            <div class="col-lg-3">1 year 31 days</div>
                          </div>
                        </div>

                        <div class="px-30 border-bottom-light">
                          <div class="row x-gap-10 items-center py-15">
                            <div class="col-lg-5">
                              <div class="d-flex items-center">
                                <img src="img/misc/2.png" alt="image" class="size-40 fit-cover">
                                <div class="ml-10">
                                  <div class="text-dark-1 lh-12 fw-500">Heather Reyes</div>
                                  <div class="text-14 lh-12 mt-5">10 Nov 2014</div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-2">Student</div>
                            <div class="col-lg-2">Team South</div>
                            <div class="col-lg-3">1 year 31 days</div>
                          </div>
                        </div>

                        <div class="px-30 border-bottom-light">
                          <div class="row x-gap-10 items-center py-15">
                            <div class="col-lg-5">
                              <div class="d-flex items-center">
                                <img src="img/misc/2.png" alt="image" class="size-40 fit-cover">
                                <div class="ml-10">
                                  <div class="text-dark-1 lh-12 fw-500">Heather Reyes</div>
                                  <div class="text-14 lh-12 mt-5">10 Nov 2014</div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-2">Student</div>
                            <div class="col-lg-2">Team South</div>
                            <div class="col-lg-3">1 year 31 days</div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <footer class="footer -dashboard py-30">
              <div class="row items-center justify-between">
                <div class="col-auto">
                  <div class="text-13 lh-1">© 2024 | College of Computer and Information Sciences BUSINESS UNIT | All Right Reserved.</div>
                </div>

                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="d-flex items-center flex-wrap x-gap-20">
                      <div>
                        <a href="help-center.php" class="text-13 lh-1">Help</a>
                      </div>
                      <div>
                        <a href="terms.php" class="text-13 lh-1">Privacy Policy</a>
                      </div>
                      <div>
                        <a href="#" class="text-13 lh-1">Cookie Notice</a>
                      </div>
                      <div>
                        <a href="#" class="text-13 lh-1">Security</a>
                      </div>
                      <div>
                        <a href="terms.php" class="text-13 lh-1">Terms of Use</a>
                      </div>
                    </div>

                    <button class="button -md -rounded bg-light-4 text-light-1 ml-30">English</button>
                  </div>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </main>

    <aside class="sidebar-menu toggle-element js-msg-toggle js-dsbh-sidebar-menu">
      <div class="sidebar-menu__bg"></div>

      <div class="sidebar-menu__content scroll-bar-1 py-30 px-40 sm:py-25 sm:px-20 bg-white -dark-bg-dark-1">
        <div class="row items-center justify-between mb-30">
          <div class="col-auto">
            <div class="-sidebar-buttons">
              <button data-sidebar-menu-button="messages" class="text-17 text-dark-1 fw-500 -is-button-active">
                Messages
              </button>

              <button data-sidebar-menu-button="messages-2" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                Messages
              </button>

              <button data-sidebar-menu-button="settings" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                Settings
              </button>

              <button data-sidebar-menu-button="contacts" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                Contacts
              </button>
            </div>
          </div>

          <div class="col-auto">
            <div class="row x-gap-10">
              <div class="col-auto">
                <button data-sidebar-menu-target="settings" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                  <i class="icon-setting text-16"></i>
                </button>
              </div>
              <div class="col-auto">
                <button data-sidebar-menu-target="contacts" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                  <i class="icon-friend text-16"></i>
                </button>
              </div>
              <div class="col-auto">
                <button data-el-toggle=".js-msg-toggle" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                  <i class="icon-close text-14"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="relative js-menu-switch">
          <div data-sidebar-menu-open="messages" class="sidebar-menu__item -sidebar-menu -sidebar-menu-opened">
            <form class="search-field rounded-8 h-50" action="post">
              <input class="bg-light-3 pr-50" type="text" placeholder="Search Courses">
              <button class="" type="submit">
                <i class="icon-search text-light-1 text-20"></i>
              </button>
            </form>

            <div class="accordion -block text-left pt-20 js-accordion">

              <div class="accordion__item border-light rounded-16">
                <div class="accordion__button">
                  <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                    <div class="icon d-flex items-center justify-center">
                      <span class="lh-1 fw-500">2</span>
                    </div>
                    <div class="icon d-flex items-center justify-center">
                      <span class="lh-1 fw-500">2</span>
                    </div>
                  </div>
                  <span class="text-17 fw-500 text-dark-1 pt-3">Starred</span>
                </div>

                <div class="accordion__content">
                  <div class="accordion__content__inner pl-20 pr-20 pb-20">
                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                      <div class="col-auto">
                        <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                      </div>
                      <div class="col">
                        <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                        <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                      </div>
                      <div class="col-auto">
                        <div class="text-13 lh-12 pt-8">35 mins</div>
                      </div>
                    </div>

                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                      <div class="col-auto">
                        <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                      </div>
                      <div class="col">
                        <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                        <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                      </div>
                      <div class="col-auto">
                        <div class="text-13 lh-12 pt-8">35 mins</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion__item border-light rounded-16">
                <div class="accordion__button">
                  <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                    <div class="icon d-flex items-center justify-center">
                      <span class="lh-1 fw-500">2</span>
                    </div>
                    <div class="icon d-flex items-center justify-center">
                      <span class="lh-1 fw-500">2</span>
                    </div>
                  </div>
                  <span class="text-17 fw-500 text-dark-1 pt-3">Group</span>
                </div>

                <div class="accordion__content">
                  <div class="accordion__content__inner pl-20 pr-20 pb-20">
                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                      <div class="col-auto">
                        <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                      </div>
                      <div class="col">
                        <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                        <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                      </div>
                      <div class="col-auto">
                        <div class="text-13 lh-12 pt-8">35 mins</div>
                      </div>
                    </div>

                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                      <div class="col-auto">
                        <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                      </div>
                      <div class="col">
                        <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                        <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                      </div>
                      <div class="col-auto">
                        <div class="text-13 lh-12 pt-8">35 mins</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion__item border-light rounded-16">
                <div class="accordion__button">
                  <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                    <div class="icon d-flex items-center justify-center">
                      <span class="lh-1 fw-500">2</span>
                    </div>
                    <div class="icon d-flex items-center justify-center">
                      <span class="lh-1 fw-500">2</span>
                    </div>
                  </div>
                  <span class="text-17 fw-500 text-dark-1 pt-3">Private</span>
                </div>

                <div class="accordion__content">
                  <div class="accordion__content__inner pl-20 pr-20 pb-20">
                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                      <div class="col-auto">
                        <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                      </div>
                      <div class="col">
                        <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                        <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                      </div>
                      <div class="col-auto">
                        <div class="text-13 lh-12 pt-8">35 mins</div>
                      </div>
                    </div>

                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                      <div class="col-auto">
                        <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                      </div>
                      <div class="col">
                        <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                        <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                      </div>
                      <div class="col-auto">
                        <div class="text-13 lh-12 pt-8">35 mins</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div data-sidebar-menu-open="messages-2" class="sidebar-menu__item -sidebar-menu">
            <div class="row x-gap-10 y-gap-10">
              <div class="col-auto">
                <img src="img/dashboard/right-sidebar/messages-2/1.png" alt="image">
              </div>
              <div class="col">
                <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Arlene McCoy</div>
                <div class="text-14 lh-1 mt-5">Active</div>
              </div>
            </div>

            <div class="mt-20 pt-30 border-top-light">
              <div class="row y-gap-20">
                <div class="col-12">
                  <div class="row x-gap-10 y-gap-10 items-center">
                    <div class="col-auto">
                      <img src="img/dashboard/right-sidebar/messages-2/2.png" alt="image">
                    </div>
                    <div class="col-auto">
                      <div class="text-15 lh-12 fw-500 text-dark-1">Albert Flores</div>
                    </div>
                    <div class="col-auto">
                      <div class="text-14 lh-1 ml-3">35 mins</div>
                    </div>
                  </div>
                  <div class="bg-light-3 rounded-8 px-30 py-20 mt-15">
                    How likely are you to recommend our company to your friends and family?
                  </div>
                </div>

                <div class="col-12">
                  <div class="row x-gap-10 y-gap-10 items-center justify-end">
                    <div class="col-auto">
                      <div class="text-14 lh-1 mr-3">35 mins</div>
                    </div>
                    <div class="col-auto">
                      <div class="text-15 lh-12 fw-500 text-dark-1">You</div>
                    </div>
                    <div class="col-auto">
                      <img src="img/dashboard/right-sidebar/messages-2/3.png" alt="image">
                    </div>
                  </div>
                  <div class="text-right bg-light-7 -dark-bg-dark-2 text-purple-1 rounded-8 px-30 py-20 mt-15">
                    How likely are you to recommend our company to your friends and family?
                  </div>
                </div>

                <div class="col-12">
                  <div class="row x-gap-10 y-gap-10 items-center">
                    <div class="col-auto">
                      <img src="img/dashboard/right-sidebar/messages-2/3.png" alt="image">
                    </div>
                    <div class="col-auto">
                      <div class="text-15 lh-12 fw-500 text-dark-1">Cameron Williamson</div>
                    </div>
                    <div class="col-auto">
                      <div class="text-14 lh-1 ml-3">35 mins</div>
                    </div>
                  </div>
                  <div class="bg-light-3 rounded-8 px-30 py-20 mt-15">
                    Ok, Understood!
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-30 pb-20">
              <form class="contact-form row y-gap-20" action="post">

                <div class="col-12">

                  <textarea placeholder="Write a message" rows="7"></textarea>
                </div>

                <div class="col-12">
                  <button type="submit" class="button -md -purple-1 text-white">Send Message</button>
                </div>
              </form>
            </div>
          </div>
          <div data-sidebar-menu-open="contacts" class="sidebar-menu__item -sidebar-menu">
            <div class="tabs -pills js-tabs">
              <div class="tabs__controls d-flex js-tabs-controls">

                <button class="tabs__button px-15 py-8 rounded-8 text-dark-1 js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">Contacts</button>

                <button class="tabs__button px-15 py-8 rounded-8 text-dark-1 js-tabs-button " data-tab-target=".-tab-item-2" type="button">Request</button>

              </div>

              <div class="tabs__content pt-30 js-tabs-content">

                <div class="tabs__pane -tab-item-1 is-active">
                  <div class="row x-gap-10 y-gap-10 items-center">
                    <div class="col-auto">
                      <img src="img/dashboard/right-sidebar/contacts/1.png" alt="image">
                    </div>
                    <div class="col-auto">
                      <div class="text-15 lh-12 fw-500 text-dark-1">Darlene Robertson</div>
                    </div>
                  </div>
                </div>

                <div class="tabs__pane -tab-item-2 ">
                  <div class="row x-gap-10 y-gap-10 items-center">
                    <div class="col-auto">
                      <img src="img/dashboard/right-sidebar/contacts/1.png" alt="image">
                    </div>
                    <div class="col-auto">
                      <div class="text-15 lh-12 fw-500 text-dark-1">Darlene Robertson</div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>


          <div data-sidebar-menu-open="settings" class="sidebar-menu__item -sidebar-menu">
            <div class="text-17 text-dark-1 fw-500">Privacy</div>
            <div class="text-15 mt-5">You can restrict who can message you</div>
            <div class="mt-30">

              <div class="form-radio d-flex items-center ">
                <div class="radio">
                  <input type="radio">
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <div class="lh-1 text-13 text-dark-1 ml-12">My contacts only</div>
              </div>


              <div class="form-radio d-flex items-center mt-15">
                <div class="radio">
                  <input type="radio">
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <div class="lh-1 text-13 text-dark-1 ml-12">My contacts and anyone in my courses</div>
              </div>


              <div class="form-radio d-flex items-center mt-15">
                <div class="radio">
                  <input type="radio">
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <div class="lh-1 text-13 text-dark-1 ml-12">Anyone on the site</div>
              </div>

            </div>

            <div class="text-17 text-dark-1 fw-500 mt-30 mb-30">Notification preferences</div>
            <div class="form-switch d-flex items-center">
              <div class="switch">
                <input type="checkbox">
                <span class="switch__slider"></span>
              </div>
              <div class="text-13 lh-1 text-dark-1 ml-10">Email</div>
            </div>

            <div class="text-17 text-dark-1 fw-500 mt-30 mb-30">General</div>
            <div class="form-switch d-flex items-center">
              <div class="switch">
                <input type="checkbox">
                <span class="switch__slider"></span>
              </div>
              <div class="text-13 lh-1 text-dark-1 ml-10">Use enter to send</div>
            </div>
          </div>
        </div>
      </div>
    </aside>
  </div>
  <!-- barba container end -->

  <!-- JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>
</body>

</html>