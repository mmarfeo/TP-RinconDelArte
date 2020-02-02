@include("head")

@section("titulo")
    Mi Perfil
@endsection

<header>
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
          <a href="/carrito">Carrito</a>
          <a href="/carrito" class="col-6">
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
                         
             <strong><a class="dropdown-item" href="/index">Ir al inicio</a></strong>
                                               
             <strong><a class="dropdown-item" href="{{ route('orders') }}">Mis compras</a></strong>
                
             <strong><a class="dropdown-item" href="/carrito">Mi carrito</a></strong>
                
             <strong><a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Borrar Cuenta</a></strong>
                                                
             <strong><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Cerrar sesion') }} </a></strong>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                       </form>
                  </div>
              </li>
          @endguest
         
      </li>
      <li class="col-1">
          <a href="/carrito">Carrito</a>
          <a href="/carrito" class="col-6">
             <i class="fas fa-shopping-cart"></i>
          </a>
      </li>
  <!-- </ul> -->
  @endif

</div>
</div>
    
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

<div class="row">
    <div class="contenedorPerfil col-lg-10 offset-lg-1 col-xs-12 row">
      
        <section class="col-12">
        <br>
          <center><h3> Mi Perfil</h3></center>  
          <br><br>
        </section>

        <section class="col-lg-5 col-xs-12 offset-2 row contenedorImagenPerfil">
          <div class="col-12 ">
          <img class="storage-avatar" src="/storage/{{$users->avatar}}" width="83%" alt="contactoFotoDefault">
          </div>    
        </section>
        
        
        <section class="col-lg-5 col-xs-12">
         <br>
        <h5>Nombre: {{$users->name}}</h5>
          <br>
        <h5>Apellido: {{$users->surname}}</h5>
          <br>
        <h5>Usuario: {{$users->usuario}}</h5>
          <br>
        <h5>E-Mail: {{$users->email}}</h5>
     <!-- <p>PROVINCIA: {{$users->provincia}} </p> -->
          <br>
        <div class="btn btn boton " style="border:none">
          <a href="/editarperfil/{{$users->id}}">EDITAR DATOS</a>
        </div>

        <div class="btn btn boton " style="border:none">
          <a href="/borrarCuenta/{{$users->id}}">BORRAR CUENTA</a>
        </div>

        </section>
      
        
        