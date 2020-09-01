<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class BigShopController extends Controller
{
    public function index(){
//        $categories=Category::where('publication_status',1)->get();
        $products=Product::orderBy('id','desc')->take(8)->get();
        //return $products;

    	return view('front-end.home.home',[
//    	    'categories'=>$categories,
            'products'=>$products
        ]);
    }
    public function contactUs(){
    	return view('front-end.contact.contact');
    }
    public function categoryProduct($id){
//        $categories=Category::where('publication_status',1)->get();
        $products = Product::where('category_id',$id)
            ->where('publication_status',1)
            ->orderBy('id','desc')
            ->get();
        //return $products;

    	return view('front-end.category.category',['products'=>$products]);
    }

    public function cartDetail(){
    	return view('front-end.category.care-detail');
    }

    public function productDetails($id){
        $product=Product::find($id);
    	return view('front-end.product.product-details',['product'=>$product]);
    }

    public function manageOrder(){

    }
}
