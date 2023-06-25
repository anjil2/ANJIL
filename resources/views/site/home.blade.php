<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome link gareko -->
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">
    <!-- bootstrap link gareko -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">
    <!-- style.css  link gareko -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
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

                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Shopping Cart</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div style="border:1px solid black;border-radius:8px;margin:0px;" class="row">
                                            <div class="col-md-6 text-left">
                                                <h5>Total:</h3>
                                            </div>
                                            <div class="col-md-6">
                                                <h5> Rs.0</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a style="padding:5px 199px;" href="{{route('site.getAddCart')}}">Go To Cart</a>
                                    </div>
                                    <div class="text-center">
                                        <a style="padding:5px 188px;" href="{{route('site.getAddCartprocced')}}" >Go To Procced</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <a class="navbar-brand" href="#"><img src="{{ asset('site/image/khatrilogo.png') }}"
                        alt="logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
    <!-- slider section starts here -->
    <section id="slider">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="content col-md-6">
                            <h1 class="col-md-8">Khatri Traders</h1>
                            <h2 class="col-md-8">Quality and Premium Goods</h2>
                            <p class="col-md-10">Khatri Traders serves you quality goods and services to our
                                customer.Welcome to our electronic website, Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Provident asperiores cumque aspernatur libero accusamus dolor alias
                                repellat ea ipsa optio at nam quos pariatur reprehenderit, quisquam voluptas blanditiis
                                id? Voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sint
                                expedita esse at id explicabo. </p>
                        </div>
                        <img class="col-md-6" src="{{ asset('site/image/elect.png') }}" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- slider section ends here -->
    <div class="about">
        <div class="about-top">
            <h1>ABOUT <span>US</span></h1>
            <div class="border-bottom">

            </div>
        </div>
        <div class="medium">
            <div class="medium-image col-6">
                <img src="site/image/electronic.avif" alt="logo">
            </div>
            <div class="medium-content col-5">
                <h2>About Khatri Traders</h2>
                <p>We are Khatri Trades. We deliver original electronic items. Browse a product, add to cart, fill your
                    address, and proceed with your order. We will deliver it safely. We provide you the best quality
                    items in best price. All the electronic items are brought here direct from the trustworthy
                    traders.We reduce the middleman cost, which makes the price higher</p>
            </div>
        </div>
    </div>
    <!-- category sections starts here -->
    <div class="category">
        <div class="category-title">
            <h3>Top-Sale</h3>
        </div>
        <div class="box-category">
             @foreach ($categories as $category)
                                            <div class="box">
                                                <img src="{{ asset('uploads/category/' . $category->category_image) }}"
                                                    alt=""><br>
                                                <b>{{ $category->category_title }}</b>
                                            </div>
                                            @endforeach
                                    </div>
                                </div>
                                <!-- category sections ends here -->
                                <!-- service sections starts here -->
                                <div class="service-container">
                                    <div class="box">
                                        <i class="fa-solid fa-truck-fast icon"></i>
                                        <h3>Free Shipping</h3>
                                        <p>Lorem, ipsum dolor.</p>
                                    </div>
                                    <div class="box">
                                        <i class="fa-solid fa-shield icon"></i>
                                        <h3>Secure Payment</h3>
                                        <p>Lorem, ipsum dolor.</p>
                                    </div>
                                    <div class="box">
                                        <i class="fa-sharp fa-solid fa-tags icon"></i>
                                        <h3>Best Price</h3>
                                        <p>Lorem, ipsum dolor.</p>
                                    </div>
                                    <div class="box">
                                        <i class="fa-solid fa-right-left icon"></i>
                                        <h3>Easy Return</h3>
                                        <p>Lorem, ipsum dolor.</p>
                                    </div>
                                </div>

                                <!-- service sections ends here -->
                                <!-- top-sale product starts here -->
                                <section>
                                    <div class="top-sale">
                                        <div class="top-sale-title">
                                            <h2>Our Top-Sale</h2>
                                        </div>
                                        <div class="top-sale-all-product">
                                            <div class="product">
                                                <div class="image">
                                                    <div class="product-title">
                                                        Watch
                                                    </div>
                                                    <img src="site/image/app.webp" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="product-top">
                                                        <h2>Good Quality <span class="rate">4.9<span
                                                                    class="star"><i
                                                                        class="fa-solid fa-star"></i></span></span>
                                                        </h2>
                                                    </div>
                                                    <h1><span>Rs.240</span>|<del>Rs.300</del>|</h1>

                                                    <div class="button">
                                                        <button>View Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <div class="image">
                                                    <div class="product-title">
                                                        Watch
                                                    </div>
                                                    <img src="site/image/cucumber.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="product-top">
                                                        <h2>Good Quality <span class="rate">4.8<span
                                                                    class="star"><i
                                                                        class="fa-solid fa-star"></i></span></span>
                                                        </h2>
                                                    </div>
                                                    <h1><span>Rs.80</span>|<del>Rs.100</del>|</h1>

                                                    <div class="button">
                                                        <button>View Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <div class="image">
                                                    <div class="product-title">
                                                        Watch
                                                    </div>
                                                    <img src="site/image/orange.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="product-top">
                                                        <h2>Good Quality<span class="rate">4.9<span
                                                                    class="star"><i
                                                                        class="fa-solid fa-star"></i></span></span>
                                                        </h2>
                                                    </div>
                                                    <h1><span>Rs.120</span>|<del>RS.150</del>|</h1>


                                                    <div class="button">
                                                        <button>View Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <div class="image">
                                                    <div class="product-title">
                                                        Watch
                                                    </div>
                                                    <img src="site/image/potato.avif" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="product-top">
                                                        <h2>Good Quality<span class="rate">4.8<span
                                                                    class="star"><i
                                                                        class="fa-solid fa-star"></i></span></span>
                                                        </h2>
                                                    </div>
                                                    <h1><span>Rs.50</span>|<del>Rs.80</del>|</h1>


                                                    <div class="button">
                                                        <button>View Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <div class="image">
                                                    <div class="product-title">
                                                        Watch
                                                    </div>
                                                    <img src="site/image/onion.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="product-top">
                                                        <h2>Good Quality <span class="rate">4.6<span
                                                                    class="star"><i
                                                                        class="fa-solid fa-star"></i></span></span>
                                                        </h2>
                                                    </div>
                                                    <h1><span>Rs.60</span>|<del>Rs.90</del>|</h1>


                                                    <div class="button">
                                                        <button>View Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <div class="image">
                                                    <div class="product-title">
                                                        Watch
                                                    </div>
                                                    <img src="site/image/guava.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="product-top">
                                                        <h2>Good Quality<span class="rate">4.5<span
                                                                    class="star"><i
                                                                        class="fa-solid fa-star"></i></span></span>
                                                        </h2>
                                                    </div>
                                                    <h1><span>Rs.1000</span>|<del>Rs.1500</del>|</h1>

                                                    <div class="button">
                                                        <button>View Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- top-sale product ends here -->
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
