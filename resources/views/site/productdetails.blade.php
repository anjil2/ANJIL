@extends('layouts.home')
@section('all')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Product Detail</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('site/css/productdetails.css') }}">
    </head>

    <body>
        <div class="containerr">
            <h1 class="text-center">Product Detail-{{ $product->category->category_title }}</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img style="width:500px;" class="product-image"
                            src="{{ asset('uploads/product/' . $product->product_image) }}" alt="Product Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-Details">
                        <h2>{{ $product->product_title }}</h2>
                        <p class="product-price">
                            @if ($product->discounted_cost)
                                $ {{ $product->orginal_cost - $product->discounted_cost }}
                                </span>
                            @endif
                            <span>
                                <del> ${{ $product->orginal_cost }}<del>
                        </p>
                        <p class="product-description">{{ $product->product_description }}</p>
                        <div class="product-buttons text-center">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" min="1" max="5" class="form-control w-100"
                                            id="rating"name="quantity" name="quantity" placeholder="Quantity" required>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
