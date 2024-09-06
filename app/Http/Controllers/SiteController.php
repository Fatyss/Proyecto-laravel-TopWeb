<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
       return view('e-commerce.index');
    }

    public function products($category_id = null){
        $products =(is_null($category_id))?
        Product::paginate(10) :
        Product::where('category_id',$category_id)->paginate(5); //nunca hay que olvidar el get por que sino no lo muestra
        $categories = Category::all();
       return view('e-commerce.products',compact('products','categories'));

     }


    public function profile($username){
        return view('profile', ['username' => $username]);
     }

     public function checkout(){
        return view('e-commerce.checkout');
     }

     public function cart(){
        return view('e-commerce.cart');
     }


     public function myaccount(){
        return view('e-commerce.myaccount');
     }

     public function wishlist(){
        return view('e-commerce.wishlist');
     }
     public function login(){
        return view('e-commerce.login');
     }
     public function contact(){
        return view('e-commerce.contact');
     }

     public function product_details($product_id){

        $product = Product::find($product_id);

        return view('e-commerce.product_details', compact('product'));
     }
     public function productBycategory() {
        //$cat = Category::fin(1);
        //$products = $cat -> products;
        //$products = Category::find(1)->products;
        //dd($products);
        $categories = Category::all();
        return view('e-commerce.producys_by_category', compact('categories'));

     }





     //metodo para que cambie


}


