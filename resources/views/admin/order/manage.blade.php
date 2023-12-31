@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="com-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Manage Orders</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
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
                            <div class="border">
                                <table id="category" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>
                                                Customer Details
                                            </th>
                                            <th>Total</th>
                                            <th>Shipping Address</th>
                                            <th>Full Address</th>
                                            <th>Payment Status</th>
                                            <th>Payment Method</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $order->cart_code }}
                                                </td>
                                                <td>{{ $order->created_at->format('M d, Y H:m:s') }}</td>
                                                <td>
                                                    {{ $order->name }} <br>
                                                    {{ $order->email }} <br>
                                                    {{ $order->mobile_number }}
                                                </td>
                                                <td>Rs. {{ $order->payment_amount }}</td>
                                                <td>All Over Nepal - 100</td>
                                                <td>{{ $order->address }}</td>
                                                <td>
                                                    @if ($order->payment_status == 'Y')
                                                        <span class="text-success ">Completed</span>
                                                    @else
                                                        <span class="text-danger ">Pending</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($order->payment_method == 'online')
                                                        <span class="">Online</span>
                                                    @else
                                                        <span class="">Cash On Delivery!</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a data-bs-toggle="modal"
                                                        data-bs-target="#viewOrder-{{ $order->cart_code }}"
                                                        style="font-weight: bold; cursor: pointer; color: blue;">View</a>

                                                    @if ($order->payment_method == 'cod')
                                                        |
                                                        <a href="{{ route('admin.makePaymentComplete', $order->id) }}"
                                                            onclick="return confirm('Are you sure you want to change payment status?');">Toggle
                                                            Payment</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    @foreach ($orders as $order1)
        <?php
        $carts = App\Models\Cart::where('cart_code', $order1->cart_code)->get();
        ?>
        <div class="modal fade" id="viewOrder-{{ $order1->cart_code }}" tabindex="-1" aria-labelledby="viewOrderLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="viewOrderLabel"><b>View Order
                                #{{ $order1->cart_code }}</b></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/product/' . $cart->getProductFromCart->product_image) }}"
                                                alt="" class="img-fluid" style="height: 100px;">
                                        </td>
                                        <td>
                                            <p>{{ $cart->getProductFromCart->product_title }} <br>
                                                {{ $cart->getProductFromCart->category->category_title }} <br>
                                                {{ $cart->quantity }} * Rs. {{ $cart->price }}
                                            </p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row top-bottom-border p-2">
                            <div class="col-md-6">Sub Total:</div>
                            <div class="col-md-6 text-right cost">Rs {{ $carts->sum('total_price') }}</div>
                        </div>
                        <div class="row top-bottom-border p-2">
                            <div class="col-md-6">Shipping Charge:</div>
                            <div class="col-md-6 text-right cost">Rs 100 | All over Nepal.
                            </div>
                        </div>
                        <div class="row top-bottom-border p-2">
                            <div class="col-md-6">Grand Total:</div>
                            <div class="col-md-6 text-right cost">Rs.
                                {{ $carts->sum('total_price') + 100 }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection