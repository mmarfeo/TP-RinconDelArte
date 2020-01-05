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

    public function create (Request $formulario){

        $reglas=[
          'name'=>"string|required|min:3|unique:products,name",
          'brand_id'=>"string|required|min:5",
          'description'=>"string|required|min:5",
          'price'=>"numeric|required|min:0",
          'imgProd'=>"image|required",
        ];
  
        $mensajes=[
          'string'=> "Sólo puede ingresar texto",
          'required'=> "Este campo es obligatorio",
          'min'=> "Este campo requiere al menos 5 carateres",
          'unique'=> "Este nombre ya fue utilizado",
          'numeric'=>"Sólo puede ingresar números",
          'image'=>"Sólo puede subir archivos .jpg o .png",
        ];
        $this->validate($formulario, $reglas,$mensajes);
  
        $path = $formulario -> file("imgProd") -> store("public");
        $nombreArchivo=basename($path);
  
        $NewProduct = new Product();
        $NewProduct->img = $nombreArchivo;
        $NewProduct->name = $formulario["name"];
        $NewProduct->description = $formulario["description"];
        $NewProduct->price = $formulario["price"];
        $NewProduct->brand_id = $formulario["brand_id"];
        $NewProduct->save();
  
        return redirect("admin");
      }
    
}
