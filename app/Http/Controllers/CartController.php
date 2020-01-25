<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductInCart;
use Auth;

use App\Product;



class CartController extends Controller{
 


    
    public function addProduct(Request $req, $productId) {
        $productInCart = ProductInCart::where("product_id",$productId)->where("user_id", Auth::id ())->first();

        if($productInCart){
        $productInCart-> count = $productInCart-> count + $req->count; 
    }   else{
        $productInCart = new ProductInCart();
        $productInCart-> count = $req->count;
        $productInCart-> product_id = $productId;
        $productInCart-> user_id = Auth::id();
    }       
        $productInCart-> save();

        return redirect()->route ('cart');
    }

        public function deleteProduct(Request $req, $productId ){
            $productInCart = ProductInCart::where("product_id",$productId)->where("user_id", Auth::id ())->first();
            
            $productInCart->delete();

            return redirect()->route ('cart');

        }




    public function verProduct($id){
        $product=Product::find($id);
        $vac=compact('product');
        //  dd($product);
        // exit;
        return view('verProduct',$vac);
    }

}
