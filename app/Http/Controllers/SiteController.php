<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $data=[
            'categories'=>Category::where('deleted_at',null)->where('status','active')->orderby('category_title','asc')->get(),

        ];
        return view('site.home',$data);
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
    public function getAddCartprocced(){
        return view('site.cartprocced');
    }

}