<?php

namespace App\Http\Controllers;

// para usar el modelo????
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listado () {
        $products = Product::all ();

        return view("admin-lista", compact ("peliculas"));
    }
}
