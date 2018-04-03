@extends('layout.app')

<style media="screen">
  .main-menu .navigation > li > a {
    color: #4d4d4d !important;
  }
  .main-menu .navigation > li:hover > a, .main-menu .navigation > li.current > a {
    color: #18c4da !important;
    opacity: 0.70;
  }
  .news-block .inner-box .image .overlay-link {
    background: rgba(25, 218, 191, 0.37) !important;
  }
  .main-header.fixed-header {
    border-bottom: 1px solid rgba(0,0,0,0.10);
    background: #f9f8fe !important;
 }

   .main-header .nav-outer .search-box-btn {
      color: #524d4d !important;
  }
</style>

@section('title')
  {{ $user['name'] }}
@endsection


@section('content')
  <section class="page-banner" style="background-image:url({{ asset('images/background/bg-banner.jpg') }});">
    <div class="auto-container">
        <h1>{{ $user['name'] }}</h1>
          <div class="bread-crumb">
            <ul class="clearfix">
                the best team we have
              </ul>
          </div>
      </div>
  </section>

  <section class="testimonials-two">
    <div class="bg-icon-1 wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms"></div>

    <div class="auto-container">
        <div class="row clearfix">
              <!--Content Column-->
              <div class="content-column col-md-7 col-sm-7 col-xs-12">
                  <div class="inner">
                      <!--Title-->
                      <div class="sec-title">
                          <div class="icon"></div>
                      </div>

                      <div class="testimonial-slider-outer">
                          <div class="icon"><span class="flaticon-straight-quotes"></span></div>

                          <div class="testimonial-slider single-item-carousel owl-theme owl-carousel">
                              <!--Slide Item-->
                              <div class="slide-item">
                                  <div class="slide-inner">
                                      <div class="text">{{ $user['quote'] }}</div>
                                      <div class="slide-info">
                                          <h4>{{ $user['name'] }}</h4>
                                          <div class="designation">{{ $user['position'] }}</div>
                                      </div>
                                  </div>
                              </div>
                              <!--Slide Item-->
                          </div>
                      </div>
                  </div>
              </div>

              <!--Image Column-->
              <div class="image-column col-md-5 col-sm-5 col-xs-12">
                  <div class="inner">
                      <figure class="image"><img src="{{ asset($user['circle_photo']) }}" alt=""></figure>
                  </div>
              </div>

          </div>
      </div>
  </section>


@endsection
