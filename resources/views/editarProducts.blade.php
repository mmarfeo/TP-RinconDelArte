@include("head")

@section("titulo")
    Editar Productos
@endsection

<header>
<!-- Contenedor de Bootstrap -->
<div class="container-fluid">

      
    <!-- Galería de Arte -->
    <div class="brand-wrap col-2 offset-5">
              <h1>
                  <a href="/index">
                    <img src="/img/logo.png" alt="Galería de Arte" class="logo">
                  </a>
               </h1>
               <br>
    </div>
  </div>
  <div>
</header>



<div class="row">
    <div class="col-lg-10 offset-lg-2 col-xs-12 row">
      
        <section class="col-12">
        <br>

        <h3 class="offset-4">Cuadro a Editar</h3>
          <br>
        </section>

        <section class="col-lg-5 col-xs-12 row offset-2">
          <div class="col-12">
          <center><img class="storage-edit-product" src="/storage/IMGproduct/{{$product->img}}" alt=""></center>
          </div>  
        </section>

        <section class="col-lg-8 col-xs-12 offset-2">

         <br>          
          <form action="" method="post" enctype="multipart/form-data">
            
            @csrf
            <label class="col-lg-4 col-xs-8 label-form" for="name">Nombre:</label>
            <input class=" col-xs-8" id="name" type="text" name="name" value="{{old('name') ?? $product->name}}">
             <span class="error"> {{$errors->first("name")}} </span>
             <br>
             
            <label class="col-lg-4 col-xs-8 label-form"  for="description">Descripción:</label>
            <input class="col-xs-8" id="description" type="text" name="description" value="{{$product->description}}">
            <span class="error"> {{$errors->first("description")}} </span>
            <br>
            
            <label class="col-lg-4 col-xs-8 label-form"  for="price">Precio:</label>
            <input class="col-xs-8" id="price" type="text" name="price" value="{{$product->price}}">
            <span class="error"> {{$errors->first("price")}} </span>
            <br>

             <label class="col-lg-4 col-xs-8 label-form" for="img">Cambiar foto:</label>
             <input class="col-xs-8" id="img" type="file" name="img" value="{{$product->img}}">
             <span class="error"> {{$errors->first("img")}} </span>
           </secion>
           <br>
           <br>
           
            <button type="submit" class="btn btn boton offset-lg-2" style="border:none">GUARDAR</button>
            <div class="btn btn boton " style="border:none">
              <a href="//borrarProducts/{{$product->id}}">BORRAR</a>
            </div>
            <br>
            <br>
            <br>
            </div>
      </div>
    </div>
  </div>