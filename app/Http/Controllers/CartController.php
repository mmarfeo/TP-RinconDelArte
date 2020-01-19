<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class CartController extends Controller
{
    public function listado () {
        $products = Product::all ();

        return view("cart", compact ("products"));
    }

}
