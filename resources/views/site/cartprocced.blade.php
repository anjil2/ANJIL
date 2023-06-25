@extends('layouts.home')
@section('all')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('site/css/cartprocced.css') }}">
    </head>

    <body>
        <div class="box">
            <div class="row">
                <div class="container col-md-8">
                    <div class="title">
                        <h1>Billing Details</h1>
                    </div>
                    <div class="row">
                        <div class="form">
                            <div class="form-group">
                                <label for="title">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('category_title') is-invalid @enderror"
                                    id="title" name="category_title" placeholder="" value="" />
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Mobile Number<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="phonenumber" placeholder=""
                                                value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Email<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" placeholder=""
                                                value="{{ old('category_title') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Shopping Address<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" placeholder=""
                                                value="{{ old('category_title') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Full Address<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" placeholder=""
                                                value="{{ old('category_title') }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Addition Informations<span
                                                class="text-danger">*</span></label><br>
                                        <textarea name="info" class="form-control" cols="70" rows="10"
                                            value="Note About your order, eg, special notes for delivery"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-pay col-md-4">
                    <div class="order">
                        <div class="order-title">
                            <h1 style="border-bottom:1px solid rgb(184, 180, 180);">Your Orders</h1>
                        </div>
                        <div class="row" style="border-bottom:1px solid rgb(184, 180, 180); margin:0px 0px;">
                            <div class="desc col-md-10">
                                <div class="image">
                                    <img src="{{ asset('site/image/khatrilogo.png') }}" alt="">
                                </div>
                                <div class="describe">
                                    <div class="col-md-12">
                                        Anjil Khatri
                                    </div>
                                    <div class="col-md-12">
                                        Anjil Khatri
                                    </div>
                                    <div class="col-md-12">
                                        Anjil Khatri
                                    </div>




                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <h5>Sub Total:</h3>
                            </div>
                            <div class="col-md-6 text-left">
                                <h5> Rs.0</h3>
                            </div>
                            <div class="col-md-6 text-left">
                                <h5>Shipping Charge:</h3>
                            </div>
                            <div class="col-md-6 text-left">
                                <h5> Rs.0</h3>
                            </div>
                            <div class="col-md-6 text-left">
                                <h5>Sub Total:</h3>
                            </div>
                            <div class="col-md-6 text-left">
                                <h5> Rs.0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="button text-center mt-2">
                        <input type="submit" class="btn btn-primary" value="Place Order">
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </body>

    </html>
@endsection
