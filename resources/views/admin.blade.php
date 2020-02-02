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
    
                          <!-- /adminProducts -->
    <form method="POST" action="/adminProducts" enctype="multipart/form-data" class="row col-12">
          @csrf
          
          <!-- Nombre -->
          <div class="input-container col-4 offset-4">
              <label for="name">Nombre de Producto</label>
              <input type="text" name="name" value="">
              <span style="color:red;font-size:20px;">{{$errors->first('name')}}</span>
          </div>
          
        
           <!-- Descripcion -->
           <div class="input-container col-4 offset-4">
               <label for="description">Descripción</label>
               <input type="text" name="description" value="">
               <span style="color:red;font-size:20px;">{{$errors->first('description')}}</span>
           </div>
         
           <!-- Precio  -->
           <div class="input-container col-4 offset-4">
                <label for="price">Precio</label>
                <input type="number" min="1" max="1000000" name="price" value="">
                <span style="color:red;font-size:20px;">{{$errors->first('price')}}</span>
            </div>
         
           <!-- Cuadro  -->
           <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <label for="cuadro" class="w-100">Cuadro</label>
                <input class="w-100" type="file" name="img" id="cuadro">
                <span style="color:red;font-size:20px;">{{$errors->first('img')}}</span>
                <br>
           </div>
            <br>


           <div class="col-4 offset-4 boton">
                <!-- <a href="{{--route('adminProducts')--}}" class="link-boton">Cargar producto</a> -->
                <button type="submit"  name="button">Cargar producto</button>
                <br>
                <br>
                <form action="/adminProducts">
                <button type="submit" name="button">Listado de productos</button>
                </form>

                <!-- <a href="/adminProducts">Listado de productos</a> -->
            </div>

             <!-- echo var_dump($_GET);
       exit; ?>-->
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
