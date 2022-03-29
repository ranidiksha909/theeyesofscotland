<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="{{asset('frontend/assets/images/favicon.png')}}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css')}}" media="all">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/jquery-ui/jquery-ui.min.css')}}">
      <!-- fancybox box css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/fancybox/dist/jquery.fancybox.min.css')}}">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/fontawesome/css/all.min.css')}}">
      <!-- Elmentkit Icon CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css')}}">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/slick/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/slick/slick-theme.css')}}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/style.css')}}">
      <title>Scotland</title>
   </head>
   <body class="home">
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="{{asset('frontend/assets/images/loader1.gif')}}" alt="">
         </div>
      </div>
      <div id="page" class="page">
         <!-- site header html start  -->
         <header id="masthead" class="site-header">
            <!-- header html start -->
            <div class="top-header">
               <div class="container">
                  <div class="top-header-inner">
                     <div class="header-contact text-left">
                        <a href="telto:01977259912">
                           <i aria-hidden="true" class="icon icon-phone-call2"></i>
                           <div class="header-contact-details d-none d-sm-block">
                              <span class="contact-label">For Further Inquires :</span>
                              <h5 class="header-contact-no">+44 (977) 2599 12</h5>
                           </div>
                        </a>
                     </div>
                     <div class="site-logo text-center">
                        <h1 class="site-title">
                           <a href="{{url('/')}}">
                              <img src="{{asset('frontend/assets/images/site-logo.png')}}" alt="Logo">
                           </a>
                        </h1>
                     </div>
                     <div class="header-icon text-right">
                        <div class="d-inline-block" style="margin-right: 10px;">
                            <a href="{{url('login')}}" style="color: #fff;">
                               Signin /
                            </a>
                            <a href="{{url('register')}}" style="color: #fff">
                                SignUp
                             </a>
                         </div>
                        <div class="header-search-icon d-inline-block">
                           <a href="#">
                              <i aria-hidden="true" class="fas fa-search"></i>
                           </a>
                        </div>

                        <div class="offcanvas-menu d-inline-block">
                           <a href="#">
                              <i aria-hidden="true" class="icon icon-burger-menu"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-header">
               <div class="container">
                  <div class="bottom-header-inner d-flex justify-content-between align-items-center">
                     {{-- <div class="header-social social-icon">
                        <ul>
                           <li>
                              <a href="https://www.facebook.com/" target="_blank">
                                 <i class="fab fa-facebook-f" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.twitter.com/" target="_blank">
                                 <i class="fab fa-twitter" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.youtube.com/" target="_blank">
                                 <i class="fab fa-youtube" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div> --}}
                     {{-- <div class="navigation-container d-none d-lg-block">
                        <nav id="navigation" class="navigation">
                           <ul>
                              <li class="menu-active">
                                 <a href="{{url('/')}}">Home</a>
                              </li>
                              <li>
                                 <a href="about.html">about us</a>
                              </li>
                              <li>
                                 <a href="destination.html">destination</a>
                              </li>
                              <li class="menu-item-has-children">
                                 <a href="{{url('/')}}">packages</a>
                                 <ul>
                                    <li>
                                       <a href="package.html">Packages</a>
                                    </li>
                                    <li>
                                       <a href="package-offer.html">Package offer</a>
                                    </li>
                                    <li>
                                       <a href="package-detail.html">Package detail</a>
                                    </li>
                                    <li>
                                       <a href="cart.html">Cart page</a>
                                    </li>
                                    <li>
                                       <a href="booking.html">Booking page</a>
                                    </li>
                                    <li>
                                       <a href="confirmation.html">Confirmation</a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="menu-item-has-children">
                                 <a href="{{url('/')}}">Pages</a>
                                 <ul>
                                    <li>
                                       <a href="home-banner.html">Home Banner</a>
                                    </li>
                                    <li>
                                       <a href="service.html">Service</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                       <a href="#">Career</a>
                                       <ul>
                                          <li>
                                             <a href="career.html">Career</a>
                                          </li>
                                          <li>
                                             <a href="career-detail.html">Career detail</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="team.html">Tour guide</a>
                                    </li>
                                    <li>
                                       <a href="gallery.html">Gallery page</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                       <a href="#">Blog</a>
                                       <ul>
                                          <li>
                                             <a href="blog-archive.html">Blog archive</a>
                                          </li>
                                          <li>
                                             <a href="blog-single.html">blog single</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="single-page.html">Single Page</a>
                                    </li>
                                    <li>
                                       <a href="testimonial.html">Testimonial</a>
                                    </li>
                                    <li>
                                       <a href="faq.html">Faq Page</a>
                                    </li>
                                    <li>
                                       <a href="search-page.html">Search Page</a>
                                    </li>
                                    <li>
                                       <a href="404.html">404 Page</a>
                                    </li>
                                    <li>
                                       <a href="comming-soon.html">Comming Soon Page</a>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="contact.html">contact us</a>
                              </li>
                           </ul>
                        </nav>
                     </div> --}}
                     {{-- <div class="header-btn">
                        <a href="booking.html" class="round-btn">Book Now</a>
                     </div> --}}
                  </div>
               </div>
            </div>
            <div class="mobile-menu-container"></div>
         </header>
