<!-- header -->
<header class="full_bg">
    <!-- header inner -->
    <div class="header">
       <div class="container-fluid">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="index.html"><img src="{{ asset ('asset/images/logo.png') }}" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a class="nav-link @yield('menuHome')" href="home-asset">Home</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link @yield('menuAbout')" href="about-asset">About</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link @yield('menuProduct')" href="product-asset">our product</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link @yield('menuGallery')" href="gallery-asset">gallery</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link @yield('menuContact')" href="contact-asset">Contact Us</a>
                         </li>
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
    <!-- end header inner -->
    <!-- end header -->