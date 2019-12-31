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
      <link rel="stylesheet" href="/css/styles.css ">      <title>@yield("titulo")</title>
  </head>

<!-- Header -->  
<header>


    <!-- Contenedor de Bootstrap -->
    <div class="container-fluid">

      <!-- Header -->
      <div class="user-nav-wrap">
        <div class="user-nav row">
            <ul class="left-nav col-3 row">
             <li class="col-2 offset-1">
                <a href="/">
                    <i class="fas fa-home"></i>
                </a>
            </li>
  <!--        <li class="col-5">
                <a href="#">
                    <i class="far fa-envelope"></i>
                    Contactanos
                </a>
            </li>    -->
            <li class="col-5 offset-1">
                <a href="/faq">
                    <i class="far fa-question-circle"></i>
                    Ayuda
                </a>
            </li>
        </ul>
  <!--      <div class="middle-nav col-2 row">
            <div class="col-12 envio-gratis">
                <a href="#">
                    <i class="fas fa-rocket"></i>
                    Envío gratis
                </a>
            </div>
        </div>-->
   
        <ul class="right-nav col-9 row">
            <!--<li class="col-3 bienvenida">
                            </li>
            <li class="col-2">
                <a href="#">
                    <i class="far fa-compass"></i>
                    Mis pedidos
                </a>
            </li>
            <li class="col-3">
                <a href="#">
                    <i class="far fa-heart"></i>
                    Lista de deseos
                </a>
            </li> -->
            <li class="col-2 offset-6"><a href="/login">Iniciar sesión</a></li>
            <li class="col-2"><a href="/register">Crear cuenta</a></li>
            <li class="col-2"><a href="/cart">Carrito</a>
                <a href="/cart" class="col-6">
                  <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
          </ul>
        </div>
       </div>


    <div class="header-wrap">
	  <header>
		<div class="primary-wrap row">

			<div class="brand-wrap col-2 offset-5">
                <h1>
                    <a href="/index">
						<img src="/img/logo.png" alt="Galería de Arte" class="logo">
						<!-- Galería de Arte -->
                    </a>
			    </h1>
			</div>
      
       <!--<div class="search-wrap col-10 row">
				<form method="get" action="#" class="col-10">
					<div class="header-search-wrap row">
                        <input type="text" placeholder="Buscar obras por título o autor" name="searchTerm" value="" class="col-9 offset-1 searchTerm">
						<button type="submit" class="col-2 searchButton">
                            <span>
                            <i class="fas fa-search"></i>
                            </span>
                        </button>
					</div>
				</form>
				<a href="#" class="col-2 busqueda-avanzada">
                    Búsqueda avanzada
                </a>
            </div>

		</div> -->
	   
    </div>

    <!--<div class="secondary-header-wrap">
        <div class="secondary-header row">
            <ul class="col-7 row">
                <li class="col-3">  -->
                    <!-- Desplegable -->
    <!--        <a href="#">
                    Comprar por categoría
                </a>
            </li>
            <li class="col-2">
                <a href="#">
                    Populares
                </a>
            </li>
            <li class="col-2">
                <a href="#">
                    Próximamente
                </a>
            </li>
            <li class="col-3">
                <a href="#">
                    Nuevos lanzamientos
                    </a>
            </li>
            <li class="col-2">
                <a href="#">
                    Ofertas
                </a>
            </li>
        </ul>
        <div class="right-section col-3 offset-2 row">
            <div class="language-selector-wrap col-3">
                <form method="post" action="">
                    <div class="language-selector">
                        <select name="selectLanguage" id="selectLanguage">
                            <option value="en_US">
                                English
                            </option>
                            <option value="es_ES" selected="selected">
                                Español
                            </option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="currency-selector-wrap col-3">
                <form method="post" action="">
	                <div class="currency-selector">
		                <select name="selectCurrency" id="selectCurrency">
                            <option value="ARS" selected="selected">
                                $&nbsp;ARS
                            </option>
                            <option value="USD">
                                $&nbsp;USD
                            </option>
			            </select>
	                </div>
                </form>
            </div>     -->
        <!--<div class="basket-wrap col-6 row">
                <a href="#" class="col-6">
                    <span>137</span>
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <span class="col-5 precio-total">$15.234,56</span>
            </div>
          </div>
	    </div>
    </div>-->
</header>
<!-- Body -->
<body>
      @yield ("principal")
      <!-- @yield ("app") -->
      @yield ("registro")
      @yield ("faq")

      
      @yield ("cart")
</body>
<!-- Footer -->
<footer class="row">

    <div class="col-2 offset-5 redes-sociales">
        <ul>
        <li><a href="https://facebook.com/" target="_blank" class="fab fa-facebook"></a></li>
        <li><a href="https://instagram.com/" target="_blank" class="fab fa-instagram"></a></li>
        <li><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></li>
        <li><a href="https://pinterest.com/" target="_blank" class="fab fa-pinterest"></a></li>
        </ul>
    </div>

</footer>
</body>
</html>
