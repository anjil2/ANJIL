<?php
namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session; 
class SiteController extends Controller
{
    public function home()
    {
        $data=[
            'categories'=>Category::where('deleted_at',null)->where('status','active')->orderby('category_title','asc')->get(),
            'products' => Product::where('deleted_at', null)->where('status', 'active')->limit(8)->get(),
        ];
        return view('site.home',$data);
    }
    public function getProductDetails($slug)
    {
        $product = Product::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->first();
        if (is_null($product)) {
            return redirect()->back()->with('error', 'Product not found');
        }
        $data = [
            'product' => $product
        ];
        return view('site.productdetails', $data);
    }
    public function getProductsByCategory($slug)
    {
        $category = Category::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->first();
        if (is_null($category)) {
            return redirect()->back()->with('error', 'Category not found');
        }
        $data = [
            'category' => $category
        ];
        return view('site.productsbycategory', $data);
    }
    public function about()
    {
        return view('site.about');
    }

    public function service()
    {
        return view('site.service');
    }
    public function getAddCart(){
        return view('site.cart');
    }
    public function getAddCartprocced($code){
        // dd($data);
        $data = [
            'code' => $code,
        ];
        return view('site.cartprocced',$data);
    }
    public function addToCartDirect( Request $request, $slug)
    {

        $product = Product::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->limit(1)->first();

        if (is_null($product)) {
            return redirect()->back()->with('error', 'Product not found');
        }
            $cart_code=$this->getCartCode();
            $quantity=1;
            $stock=$product->product_stock;
            $new_stock=$stock - $quantity;
            // $additional_information = " ";
            if ($new_stock < 1){
                return redirect()->back()->with('error','Product is out of stock');
            }
            $price=$product->orginal_cost-$product->discounted_cost; 
            $total_price=$quantity*$price;
            $cart=new Cart;
            $cart->cart_code=$cart_code;
            $cart->product_id=$product->id;
            $cart->quantity=$quantity;
            $cart->price = $price;
$cart->total_price=$total_price;
            
            $cart->save();
            $product->product_stock = $new_stock;
            $product->save();
            return redirect()->back()->with('success', 'product add to cart successfully');

        }
        public function postAddToCart(Request $request ,$slug){
            $request->validate([
                'quantity' => 'required|integer|min:1|max:5'
            ]);
            $product = Product::where('slug', $slug)->where('deleted_at', null)->where('status', 'active')->limit(1)->first();
            if (is_null($product)) {
                return redirect()->back()->with('error', 'Product not found');
            }
            $quantity = $request->input('quantity');

            $stock = $product->product_stock;
            $new_stock = $stock -  $quantity;
            if ($new_stock < 1) {
                return redirect()->back()->with('error', 'Product is out of stock');
            }
            $cart_code=$this->getCartCode();
            $quantity=1;
            $price=$product->orginal_cost-$product->discounted_cost; 
            $total_price=$quantity*$price;
            $cart=new Cart;
            $cart->cart_code=$cart_code;
            $cart->product_id=$product->id;
            $cart->quantity=$quantity;
            $cart->price = $price;
            $cart->total_price=$total_price;
            $cart->save();
            $product->product_stock = $new_stock;
            $product->save();
            return redirect()->back()->with('success', 'product add to cart successfully');
        }
        public function  getCart()
    {
        $cart_code = $this->getCartCode();
        // dd($cart_code);
        $data = [
            'carts' => Cart::where('cart_code', $cart_code)->get(),
        ];
        return $cart;
    }
    public function getDeleteCart($id){
        $cart_code=$this->getCartCode();
        $cart=Cart::where('cart_code', $cart_code)->where('id',$id)->limit(1)->first();
        if (is_null($cart)) {
            return redirect()->back()->with('error', 'Cart not found');
        }
        $product=$cart->getProductFromCart;
        $new_stock=$product->product_stock + $cart->quantity;
        $product->product_stock=$new_stock;
        $product->save();
        $cart->delete();
        return redirect()->back()->with('success', 'Cart deleted successfully');
    }
    public function getManageProduct()
    {
        $data=[
            'products'=>Product::where('deleted_at',null)->orderby('product_title','asc')->get(),
            'categories'=>Category::where('deleted_at',null)->orderby('id','desc')->get(),
        ];
        return view('admin.product.manage',$data);
    }
    public function getUpdateCart(Request $request, $id)
    {
        $cart_code = $this->getCartCode();
        $cart = Cart::where('cart_code', $cart_code)->where('id', $id)->limit(1)->first();
        if (is_null($cart)) {
            return redirect()->back()->with('error', 'Cart not found');
        }
        $request->validate([
            'quantity' => 'required|integer|min:1|max:5'
        ]);

        $product = $cart->getProductFromCart;
        // dd($product);

        $quantity = $request->input('quantity');
        $product_stock = $product->product_stock + $cart->quantity;
        $new_stock = $product_stock -  $quantity;

        if ($new_stock < 1) {
            return redirect()->back()->with('error', 'Product is out of stock');
        }

        $price = $product->orginal_cost - $product->discounted_cost;
        $total_price = $quantity * $price;

        $cart->quantity = $quantity;
        $cart->price = $price;
        $cart->total_price = $total_price;
        $cart->save();

        $product->product_stock = $new_stock;
        $product->save();

        return redirect()->back()->with('success', 'Cart Updated Successfully');
    }
    public function getCheckout(){
        $cart_code = $this->getCartCode();
        $carts=Cart::where('cart_code',$cart_code)->get();
        $data=([
            'carts'=>$carts,
            // 'cart_code'=>$this->getCartCode()
        ]);
        return view('site.cartprocced',$data);
        
    }
    public function postCheckout(Request $request){
        $cart_code = $this->getCartCode();
        $carts = Cart::where('cart_code',$cart_code)->get();
        if (!($carts->count()>0)) {
            return redirect()->back()->with('error', 'Cart not found in checkout');
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'mobile_number' => ['required', 'regex:/^(98|97)[0-9]{8}/', 'min:10', 'max:10',],
            'payment_method' => 'required|in:cod',
        ]);
        $name = $request->input('name');
       $email=$request->input('email');
       $address = $request->input('address');
       $additional_information=$request->input('additional_information');
        $mobile_number = $request->input('mobile_number');
        $payment_method = $request->input('payment_method');
        $payment_amount = $carts->sum('total_price') + 100;
                $order=new Order;
        $order->cart_code=$cart_code;
        $order->name=$name;
        $order->email=$email;
        $order->mobile_number=$mobile_number;
        $order->address=$address;
        $order->additional_information=$additional_information;
        $order->payment_method=$payment_method;
        $order->payment_status='N';
        $order->payment_amount = $payment_amount;
        // dd($payment_amount);
        $order->save();
        $request->session()->forget('cart_code');
        $order = Order::find($order->id);

        $orderItemsHTML = '<ol>';
        foreach ($carts as $cart_item) {
            $orderItemsHTML .= '<li><b>' . $cart_item->getProductFromCart->product_title . ': </b><span>' . $cart_item->quantity . ' * ' . $cart_item->price . '</span></li>';
        }
        $orderItemsHTML .= '</ol>';

        $maildata = [
            'name' => $name,
            'email' => $email,
            'order_code' => $cart_code,
            'order_date' => $order->created_at->format("d M, Y H:i:s"),
            'total_price' => $carts->sum('total_price'),
            'shipping_charge' => 100.00,
            'grand_total' => $order->payment_amount,
            'order_items' => $orderItemsHTML
        ];
        Mail::send('email.order', $maildata, function ($message) use ($maildata) {
            $message->from('khatrianjil123@gmail.com', 'ANJIL');
            $message->sender('khatrianjil123@gmail.com', 'ANJIL');
            $message->to($maildata['email'], $maildata['name']);
            $message->subject('Your Order has been Successfully Placed!');
            $message->priority(1);
        });
                return redirect()->route('/')->with('success', 'Order Created Successfully');
                // Store the form field value in a session variable


// Redirect to the other page
return redirect()->route('other.page');
    }
        // cart code lai return garni function

        public function getCartCode()
        {
                   // session bata cart code taneko
        $cart_code = Session::get('cart_code');
        // yedi session ma cart_code xaina vaney
        if (is_null($cart_code)) {
            // naya cart code generate gareko jun chai 8 length ko hunxa ani return gareko
            $cart_code = Str::random(8);
            // Session::put('cart_code', $cart_code);
            session(['cart_code' => $cart_code]);
            return $cart_code;
        }
        // yedi session ma cart code xa vaney
        else {
            // yedi tyo cart code already orders table ma xa vaney yaniki tyo cart code ko checkout vaeskako check gareko
            $check = Order::where('cart_code', $cart_code)->limit(1)->first();

            // orders table ma tyo cart code xaina vaney tehi cart_code return gareko
            if (is_null($check)) {
                return $cart_code;
            }
            // yedi orders table ma tyo cart code xa vaney naya cart code generate gareko
            else {
                $cart_code = Str::random(8);
                session(['cart_code' => $cart_code]);
                // Session::put('cart_code', $cart_code);
                return $cart_code;
            }
        }
    }
}