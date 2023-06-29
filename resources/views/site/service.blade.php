<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome link gareko -->
    <link rel="stylesheet" href="{{asset('site/fontawesome/all.css')}}">
    <!-- bootstrap link gareko -->
    <link rel="stylesheet" href="{{asset('site/bootstrap/bootstrap.css')}}">
    <!-- style.css  link gareko -->
    <link rel="stylesheet" href="{{asset('site/css/service.css')}}">
</head>
<body>
<!-- top-header section starts here -->
<section id="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-12 text-sm-center">
                <div class="top-header-contact">
                    <div class="row">
                     <div class="col-xl-4 clo-lg-4 col-sm-6 col-md-6">
                       <i class="fa-solid fa-location-dot icon"></i> Pokhara - 5, Zero K.M
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                       <i class="fa-solid fa-phone icon"></i> +977 9806183496
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 text-end header-text-sm-hide">
                 <div class="top-header-social-icon">
                        <a href="">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top-header section ends here -->
<!-- navbar section starts here -->
<section id="top-header-navbar">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="site/image/khatrilogo.png" alt="logo" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/service">Services</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">LCD</a></li>
            <li><a class="dropdown-item" href="#">Fridge</a></li>
            <li><a class="dropdown-item" href="#">AC</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact Us</a>
        </li>
      </ul>
     </div>
    </div>
  </nav>
</section>
<!-- navbar section ends here -->
<div class="row">
  <div class="service-title">
<h1>    Our <span> Servives</span></h1>
  </div>
  <div class="container">

        <div class="box">
            <i class="fa-brands fa-paypal icon"></i>
            <h2>Payment</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, odio quas laborum ea </p>
        </div>
        <div class="box">
            <i class="fa-solid fa-bus icon"></i>
            <h2>Delivery</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, odio quas laborum ea </p>
        </div>
        <div class="box">
            <i class="fa-solid fa-leaf icon"></i>
            <h2>Quality</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, odio quas laborum ea </p>
        </div>
</div>
<div class="container">
        <div class="box">
            <i class="fa-solid fa-hammer icon"></i>
            <h2>Service Heading</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, odio quas laborum ea </p>
        </div>

        <div class="box">
            <i class="fa-solid fa-hammer icon"></i>
            <h2>Service Heading</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, odio quas laborum ea </p>
        </div>
        <div class="box">
            <i class="fa-solid fa-hammer icon"></i>
            <h2>Service Heading</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, odio quas laborum ea </p>
        </div>
</div>
    </div>
      <!-- footer section starts here -->
      <section id="footer-box">
      <div class="footer">
        <h2>Contact Details</h2>
        <h3>Address:</h3>
        Khatri Traders
        <p>Masbar-7, Pokhara, Nepal</p>
        Tel:977+ 06183496
<hr>
<div class="foot-last">
  <b>© 2023 ABC. All rights reserved.</b>
</div>
      </div>
      </section>
{{-- jquery link gareko --}}
    <script src="{{ asset('site/jquery/jquery.js') }}"></script>

    {{-- proper js ko javascript link gareko --}}
    <script src="{{ asset('site/bootstrap/proper.js') }}"></script>

    {{-- bootstrap ko javascript lai link gareko --}}
    <script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>


    {{-- fontawesome ko js link gareko --}}
    <script src="{{ asset('site/fontawesome/all.js') }}"></script>

    {{-- script.js link gareko --}}
    <script src="{{ asset('site/js/script.js') }}"></script>
    
</body>
</html>