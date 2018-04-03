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
  About Us
@endsection


@section('content')
<section class="page-banner" style="background-image:url(images/background/bg-banner.jpg);">
  <div class="auto-container">
      <h1>About Us</h1>
        <div class="bread-crumb">
          <ul class="clearfix">
              the best team we have
            </ul>
        </div>
    </div>
</section>


<!--News Section-->
<section class="news-section no-padding">
  <div class="auto-container">
      <!--Title-->
        <div class="row clearfix">

      @foreach ($users as $user)
          <div class="news-block col-md-3 col-sm-6 col-xs-12">
            <div class="inner-box wow fadeInUp">
                <div class="image">
                    <a href="{{ url('user/'.$user['id']) }}"><img src="{{ $user['photo'] }}" alt="" /></a>
                      <a href="{{ url('user/'.$user['id']) }}" class="overlay-link"><span class="txt"> View More <span class="icon flaticon-arrows-6"></span></span></a>
                      <div class="post-date" style="font-size: 15px;">{{ $user['position'] }}</div>
                  </div>
                  <div class="lower-box">
                    <h3 style="text-align:center;"><a href="{{ url('user/'.$user['id']) }}">{{ $user['name'] }}</a></h3>
                  </div>
              </div>
          </div>
      @endforeach

        </div>

    </div>
</section>
<!--End News Section-->

@endsection
