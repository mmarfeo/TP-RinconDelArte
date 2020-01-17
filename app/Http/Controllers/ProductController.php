<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// para usar el modelo????
use App\Product;

class ProductController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listado () {
        $products = Product::all ();

        return view("adminProducts", compact ("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     
         /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store (Request $request){

        $reglas=[
          'name'=>"string|required|min:3",
          'description'=>"string|required|min:3",
          'price'=>"numeric|required|min:0",
          'img'=>"image|required"
        ];
  
        $mensajes=[
          'string'=> "Sólo puede ingresar texto",
          'required'=> "Este campo es obligatorio",
          'min'=> "Este campo requiere al menos 3 carateres",
          'unique'=> "Este nombre ya fue utilizado",
          'numeric'=>"Sólo puede ingresar números",
          'image'=>"Sólo puede subir archivos .jpg o .png",
        ];


        $this->validate($request,$reglas,$mensajes);


        $rutaImgProduct = $request -> file("img") -> store("public/IMGproduct");
 

        $nombreimgProduct=basename($rutaImgProduct);
        
        $NewProduct = new Product();
        $NewProduct->img = $nombreimgProduct;
        $NewProduct->name = $request->name;
        $NewProduct->description = $request->description;
        $NewProduct->price = $request->price;
 

        $NewProduct->save();
  
        return redirect("adminProducts");
      }
    
       //function modificarDatos(Request $request){
    public function editarProd(Request $request){
        


      $reglas=[
        'name'=>"string|required|min:3",
        'description'=>"string|required|min:3",
        'price'=>"numeric|required|min:0",
        'img'=>"image",
      ];

      $mensajes=[
        'string'=> "Sólo puede ingresar texto",
        'required'=> "Este campo es obligatorio",
        'min'=> "Este campo requiere al menos 3 carateres",
        'unique'=> "Este nombre ya fue utilizado",
        'numeric'=>"Sólo puede ingresar números",
        'image'=>"Sólo puede subir archivos .jpg o .png",
      ];

      $this->validate($request,$reglas,$mensajes);
      // dd($request);
      // exit;
      // $EditProduct = Product::find($id);

      // $nombreimgProduct = Product()->img;

      // $rutaImgProduct = $request -> file("img") -> store("public/IMGproduct");


      // $nombreimgProduct=basename($rutaImgProduct);

      $id=$request["id"];
      $EditProduct = Product::find($id);

      if($request->hasfile('img')){

        $request->validate([
        'img' => 'file',
        ]);
        $rutaImgProduct = $request -> file("img") -> store("public/IMGproduct");
        $nombreimgProduct=basename($rutaImgProduct);
        $EditProduct->img = $nombreimgProduct;
        }
      // $EditProduct->img = $nombreimgProduct;
      $EditProduct->name = $request["name"];
      $EditProduct->description = $request["description"];
      $EditProduct->price = $request["price"];


      $EditProduct->save();

      return redirect("adminProducts");
    }
          

  public function verProduct($id){
      $product=Product::find($id);
      $vac=compact('product');
      return view('editarProducts',$vac);
  }

  public function ProductDestroy(Request $req)
  {
      $id=$req["id"];
      $product = Product::find($id);
      $product->delete();
      return redirect("adminProducts");
  }


}
