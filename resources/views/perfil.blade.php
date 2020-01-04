@include("head")

@section("titulo")
    Mi Perfil
@endsection

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

<div class="row">
    <div class="contenedorPerfil col-lg-10 offset-lg-1 col-xs-12 row">
      
        <section class="col-12">
          <span class="titPerfil">TU PERFIL</span>  
          <br><br>
        </section>

        <section class="col-lg-5 col-xs-12 row contenedorImagenPerfil">
          <div class="col-12 contenedorImagenPerfil1">
          <img src="/storage/{{$users->avatar}}" width="83%" alt="contactoFotoDefault">
          </div>    
        </section>

        <section class="col-lg-7 col-xs-12">
          <h3>{{$users->name . " ".$users->surname}}</h3>
          <br>
          <p>Usuario: {{$users->usuario}}</p>
          <p>E-MAIL: {{$users->email}}</p>
     <!-- <p>PROVINCIA: {{$users->provincia}} </p> -->
          <br><br>
        </section>
        <div class="BOTONROJO botonPerfil">
          <a href="/editarperfil/{{$users->id}}">EDITAR DATOS</a>
        </div>

        