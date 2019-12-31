<html lang="es">

  <!-- Head -->
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- CSRF Token Esto viene de app.blade.php -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Scripts Esto viene de app.blade.php-->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Reset -->
      <link rel="stylesheet" href="/css/reset.css">

      <!-- Bootstrap -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

       <!-- Font Awesome -->
       <script src="https://kit.fontawesome.com/c028c941e3.js" crossorigin="anonymous"></script>

       <!-- Google Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300|Shadows+Into+Light&display=swap" rel="stylesheet">

       <!-- CSS -->
       <link rel="stylesheet" href="/css/styles.css ">      <title>Carrito</title>
  </head>

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
    

    <form method="post" action="/cart" enctype="multipart/form-data" class="row col-12">
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
           {{-- <a href="{{route('admin')}}" class="link-boton">Cargar producto</a> --}}
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
