<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{-- fontawesome ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    {{-- bootstrap ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    {{-- style.css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/css/about.css') }}">

    {{-- top-header section starts here --}}
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-12 text-sm-center">
                    <div class="top-header-contact">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <i class="fa-solid fa-location-dot icon"></i> Pokhara - 8, Sirjana Chowk
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <i class="fa-solid fa-phone icon"></i> +977 061-538358
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
    {{-- top-header section ends here --}}

    {{-- navbar section starts here --}}
    <section id="top-header-navbar">
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
         <a  class="navbar-brand"href="">
          <img src="{{asset('site/image/khatrilogo.png')}}" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto text-center">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="/about">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/service">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/category">
          Category
        </a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="/contact">Contact Us</a>
   </li>
    </ul>
</div>
</div>
</nav>
</section>
    {{-- navbar section ends here --}}
<div class="about-top">
    <h1>ABOUT <span>US</span></h1>
<h3>100% Good Quality an Premeium</h3>
    </div>
</div>
<div class="medium">
    <div class="medium-image col-6">
        <img src="site/image/elect.png" alt="logo" >
    </div>
    <div class="medium-content col-5">
        <h2>About Khatri Traders</h2>
        <p>We are Khatri Traders. We deliver quality electronic items and devices. Browse a product, add to cart, fill your address, and proceed with your order. We will deliver it within 2 hours. We provide you the best quality and fresh elctronic goods in reasonable price. All the items are brouht here direct from the dealers.We reduce the middleman cost, which makes the price higher</p>
    </div>
</div>
    <div class="bottom-content">
        <div class="box">
            <h3>Aim</h3>
            <p>
                We aim to shorten the time between the farm and your table. We deliver the local food, which is better, fresher and tastier.Also, we aim to cut off the middleman cost, which makes the vegetable price higher. You are a direct customer, and we are a producer means you will get mediators free pricing.
            </p>
        </div>
        <div class="box">
            <h3>Vision</h3>
            <p>
                Our vision to change the way of the traditional way of shopping. You don't need to waste your time going to a local market, bargain with shopkeepers, and bring your bag. With us, you can select your products and buy online; we will deliver it to your doorstep within a few hours.
            </p>
        </div>
    </div>
    <div class="choose">
       <ul> <h2>Why <span>Choose </span> Us?</h2></ul>
       <li>100% quality items</li>
       <li>Electronic items in resaonable price</li>
       <li>Best services to our customers</li>
       <li>Lorem ipsum dolor sit amet.</li>
       <li>Lorem ipsum dolor sit amet.</li>
       <li>Lorem ipsum dolor sit amet.</li>
    </div>

     <!-- footer section starts here -->
     <section id="footer-box">
      <div class="footer">
        <h2>Contact Details</h2>
        <h3>Address:</h3>
        Khatri Traders
        <p>Masbar-7, Pokhara, Nepal</p>
        <p>Tel: +977 6183496</p>
<hr>
<div class="foot-last">
  <b>© 2023 Team Motherland. All rights reserved.</b>
</div>
      </div>
      </section>
     <!-- footer section ends here -->
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