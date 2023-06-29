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

    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />


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
                        <?php
                        $cart_code = session('cart_code');
                        if ($cart_code) {
                            $cart_items = \App\Models\Cart::where('cart_code', $cart_code)->get(); 
                            $total_amount = $cart_items->sum('total_price'); 
                            // dd($cart_items);  
                            $code = $cart_code;
                        }
                        // dd($code);
                        ?>
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
                                    @if ($cart_items->count() > 0)
                                        <div class="modal-body">
                                        @foreach ($cart_items as $cart ) 
                                         <div class="row align-items-center justify-content-center black-border">
                                        <div class="col-md-4">
                                            <img src="{{ asset('uploads/product/' . $cart->getProductFromCart->product_image) }}"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <p>
                                                {{ $cart->getProductFromCart->product_title }}
                                            </p>
                                            <p>{{ $cart->getProductFromCart->category->category_title }}</p>
                                            <p>{{ $cart->quantity }} * Rs. {{ $cart->price }}</p>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{ route('getDeleteCart', $cart->id) }}"
                                                class="btn btn-delete"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                        @endforeach
                                            <div style="border:1px solid black;border-radius:8px;margin:0px;"
                                                class="row">
                                                <div class="col-md-6 text-left">
                                                    <h5>Total:</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5> Rs.{{$total_amount}}</h3>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="text-center">
                                            <a style="padding:5px 103px;" href="{{ route('site.getAddCart') }}">Go To
                                                Cart</a>
                                        </div>
                                        <div class="text-center">
                                            <a style="padding:5px 90px;"
                                                href="{{ route('site.getAddCartprocced', $code) }}">Go To
                                                Procced</a>
                                        </div>
                                        @else
                        <div class="modal-body">
                            <div class="alert alert-danger">No data found!</div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- top-header section ends here -->
    <?php
    $navbar_categories = \App\Models\Category::where('deleted_at', null)
        ->where('status', 'active')
        ->get();
    ?>
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
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($navbar_categories as $navbar_category)
                                    <li><a class="dropdown-item"
                                            href="{{ route('getProductsByCategory', $navbar_category->slug) }}">{{ $navbar_category->category_title }}</a>
                                    </li>
                                @endforeach
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
                    <a href="{{ route('getProductsByCategory', $category->slug) }}">
                        <img src="{{ asset('uploads/category/' . $category->category_image) }}" alt=""><br>
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
            <div class="row justify-content-center">
                @foreach ($products as $item)
                    <div class="top-sale-all-product col-md-1">
                        <div class="product col-md-2">
                            <div class="cart-icon">
                                <a href="{{ route('addToCartDirect', $item->slug) }}">
                                    <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <div class="image">
                                <div class="product-title">
                                    {{ $item->product_title }}
                                </div>
                                <img src="{{ asset('uploads/product/' . $item->product_image) }}"
                                    alt="{{ $item->product_title }}" title="{{ $item->product_title }}"
                                    class="img-fluid" />
                            </div>
                            <div class="content">
                                <a href="#">{{ $item->product_title }}</a>
                                <div class="product-top">
                                    <h5>{{ $item->category->category_title }} |
                                        @if ($item->product_stock > 0)
                                            <span class="text-success">Available in
                                                Stock</span>
                                        @else
                                            <span class="text-danger">Not Available in Stock</span>
                                        @endif
                                    </h5>
                                </div>
                                <h1>${{ $item->orginal_cost - $item->discounted_cost }}</span>
                                    @if ($item->discounted_cost > 0)
                                        <del>
                                            <del class="text-danger">${{ $item->orginal_cost }}</del>
                                    @endif
                                </h1>


                                <div class="button">
                                    <a href="{{ route('getProductDetails', $item->slug) }}" class="btn">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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

    {{-- toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    {{-- fontawesome ko js link gareko --}}
    <script src="{{ asset('site/fontawesome/all.js') }}"></script>

    {{-- script.js link gareko --}}
    <script src="{{ asset('site/js/script.js') }}"></script>


    <script>
        @if (session('success'))
            toastr.success('success!', '{{ session('success') }}');
        @endif
        @if (session('error'))
            toastr.error('error!', '{{ session('error') }}');
        @endif
    </script>

</body>

</html>
