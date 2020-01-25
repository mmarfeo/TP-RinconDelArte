@include("head")
@extends ("plantilla")

@section("title")
   Mi carrito de compras
@endsection

@section("carrito")
<body>

<div class="row">
    <div class="contenedorPerfil col-lg-12 offset-lg-0 col-xs-12 row">
      
        <section class="col-12">
        <br>
          <center><h3>Mi Carrito</h3></center>  
          <br><br>
        </section>
       
  <!-- Esto esta aca porque previeamente se puso en el modelo del usuario tienen muchos (hasMany) del modelo ("App\ProductInCart")  -->
  @if (Auth::user()->productsInCart->isNotEmpty())

<section class="col-lg-12 col-xs-12  contenedorImagenPerfil">

  <div class="container-fluid">
  
      <div class="row ">
        <ul class="col-11 offset-1">
            <li class="col-1" style="border: 1px solid black; background: white">
               <span><strong><center>Cantidad</center></strong></span>
            </li>
            <li class="col-2" style="border: 1px solid black; background: white">
               <span><strong><center>Nombre</center></strong></span>
            </li>
            <li class="col-3"style="border: 1px solid black; background: white">
               <span><strong><center>Descripción</center></strong></span>
            </li>
            <li class="col-1"style="border: 1px solid black; background: white">
               <span><strong><center>Precio</center></strong></span>
            </li>
            <li class="col-2"style="border: 1px solid black; background: white">
               <span><strong><center>Cuadro</center></strong></span>
            </li>
            <!-- <li class="col-1"style="border: 1px solid black; background: white">
               <span><strong><center>Editar</center></strong></span>
            </li> -->
            <li class="col-1"style="border: 1px solid black; background: white">
               <span><strong><center>Borrar</center></strong></span>
            </li>
        </ul>
     </div>

     @foreach(Auth::user()->productsInCart as $productInCart)

    <div class="row" style="height:8%; margin-bottom: 1%">
        <ul class="col-11 offset-1">
            <li class="col-1 li-product" >
               <span><strong><center>{{ $productInCart->count }}</center></strong></span>
            </li>
            <li class="col-2 li-product">
               <span><strong><center>{{ $productInCart->product->name }}</center></strong></span>
            </li>
            <li class="col-3 li-product">
               <span><strong><center>{{ $productInCart->product->description }}</center></strong></span>
            </li>
            <li class="col-1 li-product">
               <span><strong><center>${{ $productInCart->product->price }}</center></strong></span>
            </li>
            <li class="col-2 li-product">
               <!-- el alt es el nombre de la imagen -->
               <span><center><img class="storage-product" src="/storage/IMGproduct/{{$productInCart->product->img}}" alt="/storage/IMGproduct/{{$productInCart->product->name}}"></center></span>
            </li>
            <li class="col-1 offset-0 li-product">
            <center>
            <form action="{{ route('deleteProductFromCart', ['productId' => $productInCart->product->id]) }}" method="post">
               @csrf           
               <input type="hidden" name="_method" value="DELETE" >
               <button type="submit" class="btn-carrito">Eliminar</button>            
            </form>
            </center>
         </li>
        </ul>

     </div>
     @endforeach
     @else
    <ul class="li-product">
      <li class="col-12 offset-2 li-product">
          <span><strong><center>No hay productos</center></strong></span>
       </li>
     </ul>
     @endif
</div>
  <br>
 <br>
 <br>
 <br>
  </section>

</body>
@endsection
