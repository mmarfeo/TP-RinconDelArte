@include("head")
<header>
  <div class="primary-wrap row">
    <!-- Galería de Arte -->
    <div class="brand-wrap col-2 offset-5">
              <h1>
                  <a href="/index">
                    <img src="/img/logo.png" alt="Galería de Arte" class="logo">
                  </a>
               </h1>
    </div>
  </div>
</header>

<br>
<br>
<body>

<div class="row">
    <div class="contenedorPerfil col-lg-12 offset-lg-0 col-xs-12 row">
      
        <section class="col-12">
        <br>
          <center><h3>Listado de productos</h3></center>  
          <br><br>
        </section>
<section class="col-lg-12 col-xs-12  contenedorImagenPerfil">

  <div class="container-fluid">
      <div class="row ">
        <ul class="col-11 offset-1">
            <li class="col-1" style="border: 1px solid black; background: white">
               <span><strong><center>Código</center></strong></span>
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
            <li class="col-1"style="border: 1px solid black; background: white">
               <span><strong><center>Editar</center></strong></span>
            </li>
            <li class="col-1"style="border: 1px solid black; background: white">
               <span><strong><center>Borrar</center></strong></span>
            </li>
        </ul>
     </div>

@forelse($products as $product)

    <div class="row" style="height:8%; margin-bottom: 1%">
        <ul class="col-11 offset-1">
            <li class="col-1 li-product" >
               <span><strong><center>{{$product->id}}</center></strong></span>
            </li>
            <li class="col-2 li-product">
               <span><strong><center>{{$product->name}}</center></strong></span>
            </li>
            <li class="col-3 li-product">
               <span><strong><center>{{$product->description}}</center></strong></span>
            </li>
            <li class="col-1 li-product">
               <span><strong><center>${{$product->price}}</center></strong></span>
            </li>
            <li class="col-2 li-product">
               <span><center><img class="storage-product" src="/storage/IMGproduct/{{$product->img}}" alt=""></center></span>
            </li>
            <li class="col-1 li-product">
               <span><strong><center><a href="/editarProducts/{{$product->id}}">Editar</a></center></strong></span>
            </li>
            <li class="col-1 li-product">
               <span><strong><center><a href="/borrarProducts/{{$product->id}}">Borrar</a></center></strong></span>
            </li>
        </ul>
     </div>
 
    @empty
    <ul class="li-product">
      <li class="col-12 offset-0 li-product">
          <span><strong><center>No hay productos</center></strong></span>
       </li>
     </ul>
    @endforelse

</div>
  <br>
 <br>
 <br>
 <br>
  </section>
  <div class="row">
            <strong><center><a class="btn btn boton col-12 offset-4" href="/admin">Cargar más productos</a></center></strong>
            <strong><center><a class="btn btn boton col-12 offset-2" href="/index">Ir al inicio</a></center></strong>
   </div>
</body>

<footer class="row">
 <br>
 <br>
 <br>
 <br>

</footer>


