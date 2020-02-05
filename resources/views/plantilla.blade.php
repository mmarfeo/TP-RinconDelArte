@include("head")

  <!-- Body -->
  <body >

    <!-- Contenedor de Bootstrap -->
    <div class="container-fluid container-responsive ">

      <!-- Header -->
     <div class="user-nav-wrap " id="nav-java">
     <!-- user-nav -->
      <div class="row justify-content-between ">
         <div class="col-xs-12 col-md-12 col-lg-4 ">
        <!-- row col-xs-12 row col-md-12 col-lg-3 centrar-resposive -->
        <ul class="left-nav user-nav">
        <!-- offset-1 col-xs-12 row col-md-12 col-lg-3 centrar-resposive -->
            <li class="col-xs-12 col-md-6 col-lg-1 text-center">
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
            <!-- offset-1 col-xs-12 row col-md-12 col-lg-4 centrar-resposive -->
            <li class="col-xs-12 col-md-6 col-lg-3 text-center menu-desapa">
                <a href="/faq">
                    <i class="far fa-question-circle"></i>
                    Ayuda
                </a>
            </li>
        </ul>
        </div>
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
        <!-- <ul class="user-nav nav-rigth centrar-resposive"> -->
        <!-- col-4 row col-xs-12 offset-1  col-md-12 col-lg-1 offset-6 desaparece -->
        <div class="col-xs-12 col-md-12 col-lg-7 nav-rigth ">
        <!-- col-xs-12  col-md-1-offset-6 col-lg-1-offset-6 -->
        <ul class="col-12 user-nav ">
        <!-- col-xs-12  col-md-1-offset-6 col-lg-1-offset-6    -->
            <li class="col-xs-12 col-md-12 col-lg-2 offset-lg-5 text-center menu-desapa">
                <a href="/login">Iniciar sesión</a>
            </li>
            <!-- col-1 centrar-resposive -->
            <li class="col-xs-12 col-md-12 col-lg-2 text-center menu-desapa">
                <a href="/register">Crear cuenta</a>
            </li>
            
            @guest
            <!-- col-1 centrar-resposive -->
            <li class="col-xs-12 col-md-12 col-lg-2 text-center">
                <a href="{{ route('login') }}">Carrito</a>
                <a href="{{ route('login') }}" class="col-6">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
        </div>
        <!-- </ul> -->
                @else
                @endguest
                    <!-- <li class="col-1">
                    <a href="/cart">Carrito</a>
                    <a href="/cart" class="col-6">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                     </li> -->
 
            @else
            <li class="col-1 offset-6">
                

            @guest
            <li class="nav-item">
                <a class="nav-link centrar-resposive" href="{{ route('login') }}">{{ __('') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item centrar-resposive">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a>
                </li>
            @endif
            @else

                
            <li class="nav-item dropdown text-center">
                <img class="mini-avatar" src="/storage/{{Auth::user()->avatar}}" align="left"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <!-- hola xxxx -->Hola {{ Auth::user()->name }} <span class="caret"></span> 
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <strong><a class="dropdown-item" href="/index">Ir al inicio</a></strong>
                                
                <strong><a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Perfil</a></strong>

                <strong><a class="dropdown-item" href="{{ route('orders') }}">Mis compras</a></strong>

                <strong><a class="dropdown-item" href="/carrito">Mi carrito</a></strong>

                <strong><a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Borrar Cuenta</a></strong>
                                
                <strong><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesion') }}
                        </a></strong>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                             </form>
                        </div>
                    </li>
                    <li class="col-xs-12 col-md-12 col-lg-1 text-center">
                        <a href="/carrito">Carrito</a>
                        <a href="/carrito" class="col-6">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                @endguest
               
            </li>
            <!-- <li class="col-1">
                <a href="/cart">Carrito</a>
                <a href="/cart" class="col-6">
                   <i class="fas fa-shopping-cart"></i>
                </a>
            </li> -->
        <!-- </ul> -->
        @endif
 
    </div>
</div>

<header>
 <!-- col-xs-1 col-md-1 col-lg-2 offset-lg-5      col order-xl-5 col-xl-2-->
        	<div class="brand-wrap col-2 col-md-12 col-lg-2 offset-4 offset-lg-5">
                        <a href="/index">
                        <!-- img-fluid  -->
						<img src="/img/logo.png" alt="Galería de Arte" class="logo">  
                    </a>
			</div>
            	    
</header>
@yield ("principal")
      @yield ("app")
      @yield ("registro")
      @yield ("faq")
      @yield ("Cuadros")
      @yield ("ordenes")
      
 
<!-- Footer -->
<footer class="row">

    <div class="col-xs-12 col-md-6 col-lg-2 offset-lg-5 redes-sociales">
        <ul>
        <li><a href="https://facebook.com/" target="_blank" class="fab fa-facebook redes-responsive"></a></li>
        <li><a href="https://instagram.com/" target="_blank" class="fab fa-instagram"></a></li>
        <li><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></li>
        <li><a href="https://pinterest.com/" target="_blank" class="fab fa-pinterest"></a></li>
        </ul>
    </div>
    </footer>
    </div>

    <script>
    function accion(){
        document.getElementById("nav-java").style.display="none";
    //     for (var i = 0; i < ancla.length; i++){
    //         ancla[i].IdList.toogle("desaparece");
    //  var ancla =  }
    }
    </script>
  </body>

</html>
