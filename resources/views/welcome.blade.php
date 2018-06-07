@extends('layouts.app')
@section('content')

<body>
<!-- Header Start -->
<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar nav-bg">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="mdi mdi-menu"></span>
                    <span class="mdi mdi-menu"></span>
                    <span class="mdi mdi-menu"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('login')}}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item dropdown">

                </ul>
                <!-- Search Box Start -->
                <div class="search-icon">
              <span class="open-search">
                <i class="mdi mdi-magnify btn btn-common"></i>
              </span>
                </div>
                <form role="search" class="navbar-form">
                    <div class="container">
                        <div class="row">
                            <div class="form-group has-feedback">
                                <input type="text" placeholder="Type and search ..." class="form-control">
                                <div class="close"><i class="mdi mdi-close"></i></div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Search Box End -->
            </div>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
            <li>
                <a class="active" href="index.html">
                    Home
                </a>
            </li>
            <li>

                <ul class="dropdown">
                    <li>
                        <a href="services.html">Services</a>
                    </li>

                    <li>
                        <a href="404.html">404</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    Elements
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="tab.html">Tabs</a>
                    </li>
                    <li>
                        <a href="alert.html">Alert</a>
                    </li>
                    <li>
                        <a href="accordion.html">Accordions</a>
                    </li>
                    <li>
                        <a href="pricing.html">Pricing Tables</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="icons.html">Icons</a>
                    </li>
                    <li>
                        <a href="carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a href="counter.html">Counter</a>
                    </li>
                    <li>
                        <a href="map.html">Google Map</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    Portfolio
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="portfolio-2.html">Portfolio 2 columns</a>
                    </li>
                    <li>
                        <a href="portfolio.html">Portfolio 3 columns</a>
                    </li>
                    <li>
                        <a href="portfolio-single.html">Portfolio Single</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="about.html">
                    Blog
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="blog.html">Blog Page</a>
                    </li>
                    <li>
                        <a href="blog-single.html">Blog Single Page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    Contact Us
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="contact-us.html">Contact Us 1</a>
                    </li>
                    <li>
                        <a href="contact-us2.html">Contact Us 2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Mobile Menu End -->
    </nav>
</header>
<!-- Header End -->
<!-- About Section -->

<!-- About Section End -->

<section class="gallery-block cards-gallery">
    <div class="container">
        <div class="heading">
            <h2>Explore The beauty of Rwanda</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="#">
                        <img src="{{asset('img/image1.jpg')}}" alt="Card Image" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h6><a href="#">Lorem Ipsum</a></h6>
                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="#">
                        <img src="{{asset('img/image2.jpg')}}" alt="Card Image" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h6><a href="#">Lorem Ipsum</a></h6>
                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="#">
                        <img src="{{asset('img/image3.jpg')}}" alt="Card Image" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h6><a href="#">Lorem Ipsum</a></h6>
                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="#">
                        <img src="{{asset('img/image4.jpg')}}" alt="Card Image" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h6><a href="#">Lorem Ipsum</a></h6>
                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="{{asset('img/image5.jpg')}}">
                        <img src="{{asset('img/image5.jpg')}}" alt="Card Image" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h6><a href="#">Lorem Ipsum</a></h6>
                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="../img/image6.jpg">
                        <img src="{{asset('img/image6.jpg')}}" alt="Card Image" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h6><a href="#">Lorem Ipsum</a></h6>
                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="Material-service-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Why Choose</h1>
            </div>
        </div>
        <!-- Services Widget Section -->
        <div class="row">
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".3s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-arrange-send-backward"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Refreshing Design</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".4s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-code-tags-check"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Solid Bootstrap 4</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".5s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-grid"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">100+ Components</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".6s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-update"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Regular Updates</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".7s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-speedometer"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Speed Optimized</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp" data-wow-delay=".8s">
                <div class="media">
                    <div class="media-left">
                        <i class="material-icons pulse-shrink mdi mdi-shape-plus"></i>
                    </div>
                    <div class="media-body">
                        <h2 class="subtitle"><a href="#">Fully Customizable</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->



<!-- work-counter area -->
<section class="work-counter-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Single Counter -->
            <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".2s">
                <div class="counter">
                    <div class="icon"><i class="material-icons mdi mdi-check-all"></i></div>
                    <div class="timer">347</div>
                    <p>Projects Done</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".3s">
                <div class="counter">
                    <div class="icon"><i class="material-icons mdi mdi-clock"></i></div>
                    <div class="timer">8896</div>
                    <p>Working Hours</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".4s">
                <div class="counter">
                    <div class="icon"><i class="material-icons mdi mdi-account-multiple-outline"></i></div>
                    <div class="timer">35</div>
                    <p>Team Members</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".5s">
                <div class="counter">
                    <div class="icon"><i class="material-icons mdi mdi-sticker-emoji"></i></div>
                    <div class="timer">233</div>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Testimonial Section  -->
<div class="testimonial section-padding">
    <div class="container">
        <div class="row">
            <!-- Testimonial section  -->
            <div class="testimonials-carousel owl-carousel">
                <div class="item">
                    <div class="testimonial-item">
                        <div class="datils">
                            <h5>Adam Schwartz</h5>
                            <span>Software Articulate, Google</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.</p>
                        </div>
                        <div class="img">
                            <a href="#"><img class="img-fluid" src="assets/images/testimonial/author1.jpg"  alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item">
                        <div class="datils">
                            <h5>Clark Brown</h5>
                            <span>Brand Managerr</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.</p>
                        </div>
                        <div class="img">
                            <a href="#"><img class="img-fluid"  src="assets/images/testimonial/author2.jpg"  alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item">
                        <div class="datils">
                            <h5>Ana Blunt</h5>
                            <span>Creative Director</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.</p>
                        </div>
                        <div class="img">
                            <a href="#"><img class="img-fluid"  src="assets/images/testimonial/author3.jpg"  alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Section  -->

<!-- Start Client Section -->
<div class="client section-padding section-dark">
    <div class="container">
        <div class="row">
            <div id="client-logo" class="owl-carousel">
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/clients/client1.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/clients/client2.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/clients/client3.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/clients/client4.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/clients/client1.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/clients/client2.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/clients/client3.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/clients/client4.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Client Section -->


<!-- Contact Us Section -->
<section class="Material-contact-section section-padding section-dark">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Love to Hear From You</h1>
            </div>
        </div>
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p>

                <div class="find-widget">
                    <a href="#"><i class="material-icons mdi mdi-map-marker"></i>4435 Berkshire Circle Knoxville</a>
                </div>
                <div class="find-widget">
                    <a href="#"><i class="material-icons mdi mdi-phone"></i> + 879-890-9767</a>
                </div>
                <div class="find-widget">
                    <a href="#"><i class="material-icons mdi mdi-email-open mr-3"></i> support@Material.com</a>
                </div>
                <div class="find-widget">
                    <a href="#"><i class="material-icons mdi mdi-clock"></i> Mon to Sat: 09:30 AM - 10.30 PM</a>
                </div>
            </div>
            <!-- contact form -->
            <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                    <!-- Name -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- email -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Subject -->
                    <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Message</label>
                        <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-5">
                        <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Section End -->

<!--Footer-->
<footer class="page-footer center-on-small-only  pt-0 footer-widget-container">
    <!--Footer Links-->
    <div class="container pt-5 mb-5">
        <div class="row">
            <!--First column-->
            <div class="col-md-6 col-lg-3 col-xl-3 footer-contact-widget">
                <h3 class="footer-title">About</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eos minus expedita ipsum soluta voluptatem sed architecto.</p>
                <ul>
                    <li>
                        <a href="#"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="mdi mdi-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="mdi mdi-github-circle"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="mdi mdi-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6 col-lg-3 col-xl-3 recent-widget">
                <h3 class="footer-title">Recent Posts</h3>
                <p><a href="#" class="dark-grey-text">Growth Hacking 101</a></p>
                <p><a href="#" class="dark-grey-text">30 UX Tips and Tricks</a></p>
                <p><a href="#" class="dark-grey-text">How to Scale Your Business</a></p>
                <p><a href="#" class="dark-grey-text">Getting Started with Sketch</a></p>
                <p><a href="#" class="dark-grey-text"></a>10 Tips to Validate Your Idea</p>
                <p><a href="#" class="dark-grey-text">SEO Guideline for Designers</a></p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-6 col-lg-3 col-xl-3 link-widget">
                <h3 class="footer-title">Quick link</h3>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="portfolio-index.html">Portfolio</a></li>
                    <li><a href="#">Support</a></li>
                    {{--<li><a href="contact.html">Contact Us</a></li>--}}
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-6 col-lg-3 col-xl-3 footer-contact">
                <h3 class="footer-title">Our Gallery</h3>
                <div class="widget widget-gallery">
                    <ul class="magnific-gallery">
                        <li><a href="#"><img src="{{asset('images/gallery/thum1.jpg')}}" alt="instagram image"></a></li>
                        <li><a href="#"><img src="{{asset('images/gallery/thum2.jpg')}}" alt="instagram image"></a></li>
                        <li><a href="#"><img src="{{asset('images/gallery/thum3.jpg')}}" alt="instagram image"></a></li>
                        <li><a href="#"><img src="{{asset('images/gallery/thum4.jpg')}}" alt="instagram image"></a></li>
                        <li><a href="#"><img src="{{asset('images/gallery/thum5.jpg')}}" alt="instagram image"></a></li>
                        <li><a href="#"><img src="{{asset('images/gallery/thum6.jpg')}}" alt="instagram image"></a></li>
                    </ul>
                </div>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2018 The Owner<i class="mdi mdi-heart"></i>  <a href="#"></a></p>
                </div>
            </div>
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->


<!-- Back To Top -->
<a href="#" class="back-to-top">
    <div class="ripple-container"></div>
    <i class="mdi mdi-arrow-up">
    </i>
</a>

<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- Optional JavaScript -->


</body>



@endsection