@include("head")

@section("titulo")
    Editar Perfil
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
      <li class="col-5 offset-1">
          <a href="/faq">
              <i class="far fa-question-circle"></i>
              Ayuda
          </a>
      </li>
  </ul>
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

          <a class="dropdown-item" href="/index">Ir al inicio</a>
                          
          <a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Perfil</a>
                          
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
      
    <!-- Galería de Arte -->
    <div class="brand-wrap col-2 offset-5">
              <h1>
                  <a href="/index">
                    <img src="/img/logo.png" alt="Galería de Arte" class="logo">
                  </a>
               </h1>
    </div>
  </div>
  <div>
</header>



<div class="row">
    <div class="col-lg-10 offset-lg-2 col-xs-12 row">
      
        <section class="col-12">
        <br>

        <h3 class="offset-4">Mi Perfil</h3>
          <br>
        </section>

        <section class="col-lg-5 col-xs-12 row offset-2">
          <div class="col-12">
          <img class="storage-avatar" src="/storage/{{$users->avatar}}" width="83%" alt="">
          </div>  
        </section>
            
        <section class="col-lg-8 col-xs-12 offset-2">
          
          <br>
          <h3 class="offset-2">Cambiar mis datos</h3>
          <br>
          
          <form action="" method="POST" enctype="multipart/form-data">
            
            @csrf
            <label class="col-lg-4 col-xs-8 label-form" for="name">Nombre:</label>
            <input class=" col-xs-8" id="name" type="text" name="name" value="{{$users->name}}">
             <span class="error"> {{$errors->first("name")}} </span>
             <br>

            <label class="col-lg-4 col-xs-8 label-form"  for="surname">Apellido:</label>
            <input class="col-xs-8" id="surname" type="text" name="surname" value="{{$users->surname}}">
            <span class="error"> {{$errors->first("surname")}} </span>
            <br>
            
            <label class="col-lg-4 col-xs-8 label-form"  for="usuario">Usuario:</label>
            <input class="col-xs-8" id="usuario" type="text" name="usuario" value="{{$users->usuario}}">
            <span class="error"> {{$errors->first("usuario")}} </span>
            <br>

            <label class="col-lg-4 col-xs-8 label-form"  for="email">Email:</label>
         
                <input class="col-xs-8"id="email" type="email" name="email" value="{{$users->email}}">
           
                <span class="error"> {{$errors->first("email")}} </span>
            
            <br>
        
            <label class="col-lg-4 col-xs-8 label-form"  for="provincias">Provincia:</label>
            <select name="provincias" id="provincias" style="width:175px; background-color:#E8D8BE;">
            </select>
            <br>

             <label class="col-lg-4 col-xs-8 label-form" for="avatar">Cambiar foto:</label>
             <input class="col-xs-8" id="avatar" type="file" name="avatar" value="">
           </secion>
           <br>
           <br>
           <br>
           
            <button type="submit" class="btn btn boton offset-lg-3" style="border:none">GUARDAR</button>
            <br>
            <br>
            <br>
            </div>
      </div>
    </div>
  </div>