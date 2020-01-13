<?php

namespace App\Http\Controllers;

// para usar el modelo????
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listado () {
        $products = Product::all ();

        return view("adminProducts", compact ("products"));
    }

    public function store (Request $formProd){
       
        $reglas=[
          'name'=>"string|required|min:3|unique:products,name",
          'description'=>"string|required|min:5",
          'price'=>"numeric|required|min:0",
          'imgProduct'=>"image|required",
        ];
  
        $mensajes=[
          'string'=> "Sólo puede ingresar texto",
          'required'=> "Este campo es obligatorio",
          'min'=> "Este campo requiere al menos 5 carateres",
          'unique'=> "Este nombre ya fue utilizado",
          'numeric'=>"Sólo puede ingresar números",
          'image'=>"Sólo puede subir archivos .jpg o .png",
        ];
        $this->validate($formProd, $reglas,$mensajes);
  
        $rutaImgProduct = $formProd -> file("imgProduct") -> store("public");
        $nombreimgProduct=basename($rutaImgProduct);
  
        $NewProduct = new Product();
        $NewProduct->imgProduct = $nombreimgProduct;
        $NewProduct->name = $formProd["name"];
        $NewProduct->description = $formProd["description"];
        $NewProduct->price = $formProd["price"];
       
        $NewProduct->save();
  
        return redirect("adminProducts");
      }
    
}
