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
    

    <form method="post" action="/admin-lista" enctype="multipart/form-data" class="row col-12">
        @csrf
          <!-- Nombre -->
          <div class="input-container col-4 offset-4">
              <label for="name">Nombre de Producto</label>
              <input type="text" name="name" value="">
           </div>
        
           <!-- Descripcion -->
           <div class="input-container col-4 offset-4">
               <label for="desc">Descripción</label>
               <input type="text" name="desc" value="">
           </div>
         
           <!-- Precio  -->
           <div class="input-container col-4 offset-4">
                <label for="price">Precio</label>
                <input type="number" min="1" max="1000000" name="price" value="">
            </div>
         
           <!-- Cuadro  -->
           <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <label for="cuadro" class="w-100">Cuadro</label>
                <input class="w-100" type="file" name="img" id="cuadro">
           </div>
    <br>
    <br>

           <div class="col-4 offset-4 boton">
           {{-- <a href="{{route('admin-lista')}}" class="link-boton">Cargar producto</a> --}}
                <button type="submit"  name="button">Cargar producto</button>
           </div>

    </form>
 <br>
 <br>
</body>
<footer class="row">
 <br>
 <br>
 <br>
 <br>

</footer>
