<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="" />
    <!-- Page Title -->
    <title>HOSTEL MANAGEMENT SYSTEM</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="{{asset('assets/img/logo/ngobd-favicon.png')}}" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/lightgallery.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    @yield('styles')
  </head>

  <body>
    <!-- Start Header Section -->
    <header class="st-site-header st-style1 st-sticky-header">
      <div class="st-top-header">
        <div class="container">
          <div class="st-top-header-in">
            <ul class="st-top-header-list">
              <li>
                <span>Last update: 10 January, 2021</span>
              </li>
              <li>
                <svg
                  enable-background="new 0 0 479.058 479.058"
                  viewBox="0 0 479.058 479.058"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                  />
                </svg>
                <a href="#">info@hmsbd.com</a>
              </li>
              <li>
                <svg
                  enable-background="new 0 0 512.021 512.021"
                  viewBox="0 0 512.021 512.021"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g>
                    <path
                      d="m367.988 512.021c-16.528 0-32.916-2.922-48.941-8.744-70.598-25.646-136.128-67.416-189.508-120.795s-95.15-118.91-120.795-189.508c-8.241-22.688-10.673-46.108-7.226-69.612 3.229-22.016 11.757-43.389 24.663-61.809 12.963-18.501 30.245-33.889 49.977-44.5 21.042-11.315 44.009-17.053 68.265-17.053 7.544 0 14.064 5.271 15.645 12.647l25.114 117.199c1.137 5.307-.494 10.829-4.331 14.667l-42.913 42.912c40.482 80.486 106.17 146.174 186.656 186.656l42.912-42.913c3.837-3.837 9.36-5.466 14.667-4.331l117.199 25.114c7.377 1.581 12.647 8.101 12.647 15.645 0 24.256-5.738 47.224-17.054 68.266-10.611 19.732-25.999 37.014-44.5 49.977-18.419 12.906-39.792 21.434-61.809 24.663-6.899 1.013-13.797 1.518-20.668 1.519zm-236.349-479.321c-31.995 3.532-60.393 20.302-79.251 47.217-21.206 30.265-26.151 67.49-13.567 102.132 49.304 135.726 155.425 241.847 291.151 291.151 34.641 12.584 71.867 7.64 102.132-13.567 26.915-18.858 43.685-47.256 47.217-79.251l-95.341-20.43-44.816 44.816c-4.769 4.769-12.015 6.036-18.117 3.168-95.19-44.72-172.242-121.772-216.962-216.962-2.867-6.103-1.601-13.349 3.168-18.117l44.816-44.816z"
                    />
                    <path
                      d="m496.02 272c-8.836 0-16-7.164-16-16 0-123.514-100.486-224-224-224-8.836 0-16-7.164-16-16s7.164-16 16-16c68.381 0 132.668 26.628 181.02 74.98s74.98 112.639 74.98 181.02c0 8.836-7.163 16-16 16z"
                    />
                    <path
                      d="m432.02 272c-8.836 0-16-7.164-16-16 0-88.224-71.776-160-160-160-8.836 0-16-7.164-16-16s7.164-16 16-16c105.869 0 192 86.131 192 192 0 8.836-7.163 16-16 16z"
                    />
                    <path
                      d="m368.02 272c-8.836 0-16-7.164-16-16 0-52.935-43.065-96-96-96-8.836 0-16-7.164-16-16s7.164-16 16-16c70.58 0 128 57.42 128 128 0 8.836-7.163 16-16 16z"
                    />
                  </g>
                </svg>
                <a href="#">+01 234 567 890</a>
              </li>
            </ul>
            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                  <a class="st-btn st-style1 st-size-medium st-color1" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  this.closest('form').submit();">Log Out</a></form>
          </div>
        </div>
      </div>
      <div class="st-main-header">
        <div class="container">
          <div class="st-main-header-in">
            <div class="st-main-header-left">
              <a class="st-site-branding" href="index.html">
              HO_ME_SY
              </a>
            </div>
            <div class="st-main-header-right">
              <div class="st-nav">
                <ul class="st-nav-list">
                  <li><a href="{{route('admin')}}">Admin</a></li>

                  <li class="menu-item-has-children">
                    <a href="{{route('home')}}"
                      >Home
                      
                    </a>
                  </li>
                  <li class="menu-item-has-children">
  <a href="{{route('about')}}"
    >About
    
  </a>
</li>
<li><a href="{{route('members')}}">Hostel Members</a></li>
                  <li class="menu-item-has-children">
                    <a href="{{route('posts.create')}}"
                      >Create Blog
                     
                    </a>
                    
                  </li>
                  <li><a href="{{route('home')}}">Blogs</a></li>
                  <li><a href="{{route('notice')}}">Notice</a></li>
                  <li><a href="{{route('askrooms.create')}}">Ask Room</a></li>
                  <li><a href="{{route('leaverooms.create')}}">Leave Room</a></li>
                  <li><a href="{{route('apply')}}">Opinion</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Section -->
    <div class="st-content">
      <div
        class="st-page-heading st-size-md st-style1 st-dynamic-bg"
        data-src="assets/img/bg/bg-img3.jpg"
      >
        <div class="container">
          <div class="st-page-heading-in text-center">
            <h1 class="st-page-heading-title">Send Your Opinion To Us</h1>
            <div class="st-page-heading-subtitle">
              We would like to welcome it.
            </div>
          </div>
        </div>
      </div>
      <!-- .st-page-heading -->
      <!-- Start Contact Section -->
      <section class="st-shape-wrap" id="contact">
        <div class="st-shape2">
          <img src="assets/img/shape/bg-shape2.png" alt="shape2" />
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <!-- form validation error message -->
              <div id="st-alert"></div>
              @if(Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('message_sent')}}
                </div>
              @endif
              <form
                action="{{route('contact.send')}}"
                class="row st-contact-form st-type1"
                method="post"
                enctype="multipart/form-data"
                id="contact-form"
              >
              @csrf
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>Full Name</label>
                    <input
                      type="text"
                      id="name"
                      name="name"
                      placeholder="John Doe"
                      required
                    />
                  </div>
                </div>
                <!-- .col -->
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>Email Address</label>
                    <input
                      type="text"
                      id="email"
                      name="email"
                      placeholder="example@gmail.com"
                      required
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>Program Name
                    <input
                      type="text"
                      id="email"
                      name="email"
                      placeholder="B.Sc in CSE / M.sc in CSE"
                      required
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>Semester</label>
                    <input
                      type="text"
                      id="email"
                      name="email"
                      placeholder="First/Second/Third..."
                      required
                    />
                  </div>
                </div>
                <!-- .col -->
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>Subject</label>
                    <input
                      type="text"
                      id="subject"
                      name="subject"
                      placeholder="Write subject"
                      required
                    />
                  </div>
                </div>
                <!-- .col -->
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>Phone</label>
                    <input
                      type="text"
                      id="phone"
                      name="phone"
                      placeholder="+00 376 12 465"
                      required
                    />
                  </div>
                </div>
                <!-- .col -->
                <div class="col-lg-12">
                  <div class="st-form-field st-style1">
                    <label>Your Message</label>
                    <textarea
                      cols="30"
                      rows="10"
                      id="msg"
                      name="msg"
                      placeholder="Write something here..."
                      required
                    ></textarea>
                  </div>
                </div>
                <!-- .col -->
                <div class="col-lg-12">
                  <div class="text-center">
                    <div class="st-height-b10 st-height-lg-b10"></div>
                    <button
                      class="st-btn st-style1 st-color1 st-size-medium"
                      method="post"
                    >
                      Send message
                    </button>
                  </div>
                </div>
                <!-- .col -->
              </form>
            </div>
            <!-- .col -->
          </div>
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
      </section>
      <!-- End Contact Section -->

      <div class="st-google-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10329.06404751168!2d90.37222517130952!3d23.75181458027787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1606339379882!5m2!1sen!2sbd"
          allowfullscreen
        ></iframe>
      </div>
    </div>
    <!-- Start Footer -->
    <footer class="st-site-footer st-sticky-footer">
      <div class="st-main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="st-footer-widget">
                <div class="st-text-field">
                   HOSTEL MANAGEMENT SYSTEM

                  <div class="st-height-b25 st-height-lg-b25"></div>
                  <div class="st-footer-text">
                    We are trying to feel this place like home,
                    Our activities are taken around the world.
                  </div>
                  <div class="st-height-b25 st-height-lg-b25"></div>
                  <ul class="st-social-btn st-style1 st-mp0">
                    <li>
                      <a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li>
                      <a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com"><i class="fab fa-youtube-square"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- .col -->
            <div class="col-lg-3">
              <div class="st-footer-widget">
                <h2 class="st-footer-widget-title">Useful Links</h2>
                <ul class="st-footer-widget-nav st-mp0">
                  <li>
                    <a href="#"><i class="fas fa-chevron-right"></i>FAQs</a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-chevron-right"></i>Web Mail</a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fas fa-chevron-right"></i>Payment Methods</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fas fa-chevron-right"></i>Upcoming Events</a
                    >
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-chevron-right"></i>Career</a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fas fa-chevron-right"></i>Terms & Conditions</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <!-- .col -->
            <div class="col-lg-3">
              <div class="st-footer-widget">
                <h2 class="st-footer-widget-title">Services</h2>
                <ul class="st-footer-widget-nav st-mp0">
                  <li>
                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-chevron-right"></i>Sponsor</a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fas fa-chevron-right"></i></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fas fa-chevron-right"></i></a
                    >
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-chevron-right"></i>Partner</a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- .col -->
            <div class="col-lg-3">
              <div class="st-footer-widget">
                <h2 class="st-footer-widget-title">Contacts</h2>
                <ul class="st-footer-contact-list st-mp0">
                  <li>
                    <span class="st-footer-contact-title">Address:</span> 58/9,
                    Uttara Residential Area, Dhaka-1205.
                  </li>
                  <li>
                    <span class="st-footer-contact-title">Email:</span>
                    info@hmsbd.com
                  </li>
                  <li>
                    <span class="st-footer-contact-title">Phone:</span> (+01) -
                    234 567 890 <br />(+01) - 234 567 890
                  </li>
                </ul>
              </div>
            </div>
            <!-- .col -->
          </div>
        </div>
      </div>
      <div class="st-copyright-wrap">
        <div class="container">
          <div class="st-copyright-in">
            <div class="st-left-copyright">
              <div class="st-copyright-text">
              <strong>Copyright &copy; 2020 <a href="http://innovtec.net">Innovtec</a>.</strong>
    All rights reserved.
              </div>
            </div>
            <div class="st-right-copyright">
              <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Video Popup -->
    <div class="st-video-popup">
      <div class="st-video-popup-overlay"></div>
      <div class="st-video-popup-content">
        <div class="st-video-popup-layer"></div>
        <div class="st-video-popup-container">
          <div class="st-video-popup-align">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="about:blank"></iframe>
            </div>
          </div>
          <div class="st-video-popup-close"></div>
        </div>
      </div>
    </div>
    <!-- End Video Popup -->

    <!-- Scripts -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkg.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slick.min.js')}}"></script>
    <script src="{{asset('assets/js/mailchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/counter.min.js')}}"></script>
    <script src="{{asset('assets/js/lightgallery.min.js')}}"></script>
    <script src="{{asset('assets/js/ripples.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('js/toastr.min.js') }}" ></script>
    <script>
       @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
       @endif

       @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
       @endif

    </script>
        @yield('scripts')
  </body>
</html>