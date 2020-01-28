<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderProduct;
use App\ProductInCart;
use Auth;

class OrdersController extends Controller
{
    public function createOrder(){
        $user = Auth::user();

        $order= new Order ();
        $order->user_id = $user->id;
        $order->total = $user->cartTotal();
        $order->save();

        foreach($user->productsInCart as $productInCart){
            $orderProduct = new OrderProduct ();
            $orderProduct->order_id = $order->id;
            $orderProduct->product_id = $productInCart->product->id;
            $orderProduct->count = $productInCart->count;
            $orderProduct->price = $productInCart->product->price;
            $orderProduct->save();
        }

        ProductInCart::where("user_id", $user->id)->delete ();

        return redirect()->route("orders");
    }
}


