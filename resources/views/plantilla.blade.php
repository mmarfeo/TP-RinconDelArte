@include("head")

  <!-- Body -->
  <body >

    <!-- Contenedor de Bootstrap -->
    <div class="container-fluid">

      <!-- Header -->
      <div class="user-nav-wrap">
    <div class="user-nav row">
        <ul class="left-nav col-3 row">
            <li class="col-2 offset-1">
                <a href="/index">
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
        </div>
        <ul class="right-nav col-7 row">
            <li class="col-3 bienvenida">
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
            @if( Auth::guest() )
 
            <li class="col-1 offset-6">
                <a href="/login">Iniciar sesión</a>
            </li>
            
            <li class="col-1">
                <a href="/register">Crear cuenta</a>
            </li>
            
            <li class="col-1">
                <a href="/cart">Carrito</a>
                <a href="/cart" class="col-6">
                   <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
 
            @else
            <li class="col-1 offset-6">
                

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a>
                </li>
            @endif
            @else

                
            <li class="nav-item dropdown">
                <img class="mini-avatar" src="/storage/{{Auth::user()->avatar}}" align="left"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <!-- hola xxxx -->Hola {{ Auth::user()->name }} <span class="caret"></span> 
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="/index">Ir al inicio</a>
                                
                <a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Perfil</a>

                <a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Borrar Cuenta</a>
                                
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesion') }}
                    </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                             </form>
                        </div>
                    </li>
                @endguest
               
            </li>
            <li class="col-1">
                <a href="/cart">Carrito</a>
                <a href="/cart" class="col-6">
                   <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        <!-- </ul> -->
        @endif
 
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
<!--
			<div class="search-wrap col-10 row">
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

		</div>     -->
	</header>
</div>

<!--
<div class="secondary-header-wrap">
	<div class="secondary-header row">
        <ul class="col-7 row">
            <li class="col-3">  -->
                <!-- Desplegable -->
<!--                <a href="#">
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
<!--              <div class="basket-wrap col-6 row">
                <a href="#" class="col-6">
                    <span>137</span>
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <span class="col-5 precio-total">$15.234,56</span>
            </div>
        </div>
	</div>
</div>    -->
      @yield ("principal")
      <!-- @yield ("app") -->
      @yield ("registro")
      @yield ("faq")

      
      @yield ("cart")
 
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
    </div>
  </body>

</html>
