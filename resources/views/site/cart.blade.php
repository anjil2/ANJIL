@extends('layouts.home')
@section('all')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('site/css/cart.css')}}">
</head>
<body>
    <table class="col-md-9" >
        <tr>
    <th>Image</th>
    <th>Item</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Action</th>
</tr>
<tr>
    <td><img style="width:70px;" src="{{asset('site/image/khatrilogo.png')}}" alt=""></td>
    <td>Laptop</td>
    <td>Rs.900</td>
    <td>100</td>
    <td>Rs.9010</td>
    <td>Delete</td>
</tr>
    </table>
    <div class="row">
        <div class="content col-md-4">
            <div class="title">
                <h2>Shipping Details</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, itaque adipisci unde vitae doloremque temporibus fugit corrupti ad distinctio nobis nam deleniti qui quod voluptas quasi fuga voluptate nemo veniam?  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa possimus suscipit sit quisquam officiis, quae dolor molestiae in similique. Sapiente quasi exercitationem est obcaecati deleniti numquam temporibus amet nisi labore?</p>
            </div>
      </div>
      
      <div class="cart col-md-4">
        <div class="title">
            <h2>Card Totals</h2>
          <table>
            <tr>
                <td>Sub Total</td>
                <td>Rs 9</td>
            </tr>
            <tr>
                <td>Shipping Charge</td>
                <td>Rs.2.00|Myagdi</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Rs.151515</td>
            </tr>
     </table>
        </div>
    </div>
    <div class="button">
    <input type="submit" class="btn btn-primary" value="Continue Shopping">
    <input type="submit" class="btn btn-primary" value="Procced To Checkout">
</div>
</body>
</html>
@endsection