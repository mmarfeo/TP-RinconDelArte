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
        <br><br>
        <h5>Nombre y Apellido: {{$users->name . " ".$users->surname}}</h5>
          <br>
          <h5>Usuario: {{$users->usuario}}</h5>
          <br>
          <h5>E-Mail: {{$users->email}}</h5>
     <!-- <p>PROVINCIA: {{$users->provincia}} </p> -->
          <br><br>
          <div class="btn btn boton " style="border:none">
          <a href="/editarperfil/{{$users->id}}">EDITAR DATOS</a>
        </div>

        </section>
      
        
        