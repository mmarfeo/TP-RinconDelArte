@include("head")

@section("title")
   Mis órdenes
@endsection

<body>
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
      
          @guest
              <li class="col-1">
                  <a href="{{ route('login') }}">Carrito</a>
                  <a href="{{ route('login') }}" class="col-6">
                      <i class="fas fa-shopping-cart"></i>
                  </a>
              </li>
          @else
          @endguest
              <!-- <li class="col-1">
              <a href="/cart">Carrito</a>
              <a href="/cart" class="col-6">
                  <i class="fas fa-shopping-cart"></i>
              </a>
               </li> -->

      @else
      <li class="col-1 offset-6 nav-login">
          

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

          
      <li class="nav-item dropdown ">
          <img class="mini-avatar" src="/storage/{{Auth::user()->avatar}}" align="left"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <!-- hola xxxx -->Hola {{ Auth::user()->name }} <span class="caret"></span> 
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

          <a class="dropdown-item nav-desplegable" href="/index"><strong>Ir al inicio</strong></a>
                          
          <strong><a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Perfil</a></strong>

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
              <!-- <li class="col-1">
                  <a href="/carrito">Carrito</a>
                  <a href="/carrito" class="col-6">
                      <i class="fas fa-shopping-cart"></i>
                  </a>
              </li> -->
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
</header>
</div>


<div class="row">
    <div class="contenedorPerfil col-lg-12 offset-lg-0 col-xs-12 row">
      
        <section class="col-12">
        <br>
          <center><h3>Mis compras</h3></center>  
          <br><br>
        </section>
       
  <!-- Esto esta aca porque previeamente se puso en el modelo del usuario tienen muchos (hasMany) del modelo ("App\ProductInCart")  -->
  @if (Auth::user()->orders->isNotEmpty())

<section class="col-lg-12 col-xs-12  contenedorImagenPerfil">

  <div class="container-fluid">
  @foreach(Auth::user()->orders as $order)
      <div class="row ">
        <ul class="col-10 offset-2">
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
            <!-- <li class="col-1"style="border: 1px solid black; background: white">
               <span><strong><center>Borrar</center></strong></span>
            </li> -->
        </ul>
     </div>

     @foreach($order->ordersProduct as $orderProduct)

    <div class="row" style="height:8%; margin-bottom: 1%">
        <ul class="col-10 offset-2">
            <li class="col-1 li-product" >
               <span><strong><center>{{ $orderProduct->count }}</center></strong></span>
            </li>
            <li class="col-2 li-product">
               <span><strong><center>{{ $orderProduct->product->name }}</center></strong></span>
            </li>
            <li class="col-3 li-product">
               <span><strong><center>{{ $orderProduct->product->description }}</center></strong></span>
            </li>
            <li class="col-1 li-product">
               <span><strong><center>${{ $orderProduct->product->price }}</center></strong></span>
            </li>
            <li class="col-2 li-product">
               <!-- el alt es el nombre de la imagen -->
               <span><center><img class="storage-product" src="/storage/IMGproduct/{{$orderProduct->product->img}}" alt="/storage/IMGproduct/{{$orderProduct->product->name}}"></center></span>
            </li>

        </ul>

     </div>
        @endforeach
        <ul class="col-11 offset-1">
            <li class="col-2 offset-6 li-product" align="center">
            <span class="h3"><strong> Total: ${{$order->total}}</strong></span>
            
            </li>
        </ul>
        @endforeach

     @else
    <ul class="li-product">
      <li class="col-12 offset-2 li-product">
          <span><strong><center>No hay compras</center></strong></span>
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

