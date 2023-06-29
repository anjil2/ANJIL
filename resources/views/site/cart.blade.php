@extends('layouts.home')
@section('all')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('site/css/cart.css') }}">
    </head>

    <body>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <table class="col-md-9">
            <tr>
                <th>Image</th>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php
            $cart_code = session('cart_code');
            if ($cart_code) {
                $cart_items = \App\Models\Cart::where('cart_code', $cart_code)->get();
                $total_amount = $cart_items->sum('total_price');
            }
            ?>
            @foreach ($cart_items as $cart)
                <tr>
                    <td><img style="width:70px;"
                            src="{{ asset('uploads/product/' . $cart->getProductFromCart->product_image) }}" alt="">
                    </td>
                    <td>{{ $cart->getProductFromCart->product_title }}</td>
                    <td>Rs. {{ $cart->price }}</td>
                    <td>
                    <form action="{{ route('getUpdateCart', $cart->id) }}" method="POST"
                                                class="form-inline">
                            @csrf
                            <div class="form-group">
                                <input type="number" class="form-control" name="quantity" id="quantiy"
                                    value="{{ $cart->quantity }}" max="5" min="1">
                            </div>
                            <button type="submit" class="btn btn-danger form-control"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                        </form>
                    </td>
                    <td>Rs. {{ $cart->total_price }}</td>
                    <td>
                        <a href="{{ route('getDeleteCart', $cart->id) }}" class="btn btn-primary"><i
                                class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="row">
            <div class="content col-md-4">
                <div class="title">
                    <h2>Shipping Details</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, itaque adipisci unde vitae
                        doloremque temporibus fugit corrupti ad distinctio nobis nam deleniti qui quod voluptas quasi fuga
                        voluptate nemo veniam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa possimus
                        suscipit sit quisquam officiis, quae dolor molestiae in similique. Sapiente quasi exercitationem est
                        obcaecati deleniti numquam temporibus amet nisi labore?</p>
                </div>
            </div>

            <div class="cart col-md-4">
                <div class="title">
                    <h2>Card Totals</h2>
                    <table>
                        <tr>
                            <td>Sub Total</td>
                            <td>Rs {{ $cart->sum('total_price') }}</td>
                        </tr>
                        <tr>
                            <td>Shipping Charge</td>
                            <td>Rs 100 (all over nepal)</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>Rs. {{ $cart->sum('total_price') + 100 }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="button">
                <a href="{{asset('')}}"><input type="submit" class="btn btn-primary" value="Continue Shopping"></a>
                <a href="{{route('site.getAddCartprocced')}}"><input type="submit" class="btn btn-primary" value="Procced To Checkout"></a>
            </div>
    </body>

    </html>
@endsection
