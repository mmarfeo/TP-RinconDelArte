@include("head")

@section("titulo")
    Mi Perfil
@endsection

<header>
  <div class="primary-wrap row">
    <!-- Header -->
    <div class="user-nav-wrap col-12">
    
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

        </section>
      
        
        