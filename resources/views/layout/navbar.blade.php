<header class="main-header">

    <!-- Main Box -->
  <div class="main-box">
      <div class="auto-container">
          <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt=""></a></div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li class="dropdown"><a href="#">Projects</a>
                                  <ul>
                                        <li><a href="projects.html">Projects Version 1</a></li>
                                        <li><a href="projects-2.html">Projects Version 2</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                  <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-single.html">Blog Detail</a></li>
                                        <li><a href="error-page.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="http://t.commonsupport.com/venezia/blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!--Nav Outer End-->

          </div>
        </div>
    </div>

</header>
<!--End Main Header -->
