<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class IndexController extends Controller
{
    public function listado () {
        $products = Product::all ();

        return view("index", compact ("products"));
    }
}
