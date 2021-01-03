@extends('layout')

@section('content')

<div class="st-content">

      <div class="st-height-b125 st-height-lg-b80"></div>

      <!-- Start Hero Seciton -->
      <div class="st-slider st-style1 st-slider-animation1">
        <div
          class="slick-container"
          data-autoplay="0"
          data-loop="1"
          data-speed="800"
          data-autoplay-timeout="1000"
          data-center="0"
          data-slides-per-view="1"
        >
          <div class="slick-wrapper">
            <div class="slick-slide-in">
              <div class="st-hero st-style1 st-size1">
                <div
                  class="st-hero-bg st-dynamic-bg st-bg"
                  data-src="{{asset('assets/img/logo/pro1.jpg')}}"
                ></div>
                <div class="container">
                  <div class="st-hero-text">
                    <h1 class="st-hero-title">
                      HOSTEL MANAGEMENT<br />
                      SYSTEM
                    </h1>

                    <div class="st-height-b15 st-height-lg-b15"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slick-slide-in">
              <div class="st-hero st-style1 st-size1">
                <div
                  class="st-hero-bg st-dynamic-bg st-bg"
                  data-src="{{asset('assets/img/logo/pro2.jpg')}}"
                ></div>
                <div class="container">
                  <div class="st-hero-text">
                    <h1 class="st-hero-title">
                      HOSTEL MANAGEMENT<br />
                      SYSTEM
                    </h1>

                    <div class="st-height-b15 st-height-lg-b15"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slick-slide-in">
              <div class="st-hero st-style1 st-size1">
                <div
                  class="st-hero-bg st-dynamic-bg st-bg"
                  data-src="{{asset('assets/img/logo/pro3.jpg')}}"
                ></div>
                <div class="container">
                  <div class="st-hero-text">
                    <h1 class="st-hero-title">
                      HOSTEL MANAGEMENT <br />
                      SYSTEM
                    </h1>

                    </div>
                    <div class="st-height-b15 st-height-lg-b15"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .slick-container -->
        <div class="pagination st-style2 st-hidden"></div>
        <!-- If dont need Pagination then add class .st-hidden -->
        <div class="swipe-arrow st-style2">
          <!-- If dont need navigation then add class .st-hidden -->
          <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
          <div class="slick-arrow-right">
            <i class="fa fa-chevron-right"></i>
          </div>
        </div>
      </div>
      <!-- .st-slider -->
      <!-- End Hero Seciton -->

      <div class="st-google-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10329.06404751168!2d90.37222517130952!3d23.75181458027787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1606339379882!5m2!1sen!2sbd"
          allowfullscreen
        ></iframe>
      </div>
    </div>

    @endsection
