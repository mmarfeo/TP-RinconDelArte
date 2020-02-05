@extends ("plantilla")
@section('titulo')
  Rincon Del Arte
@endsection
@section ("principal")

<!-- Contenido principal de la página -->
  <main class="row">

    <!-- Barra lateral -->
    <section class="col-2 sidebar desaparece">
      <img class="arte" src="img/arte-6.jpeg" alt=""/>
    </section>
    <div class="main-content col-xs-12 col-md-12 col-lg-10 row">

      <!-- Carousel -->
      <div class="carousel-container col-12 row">
        <section id="demo" class="carousel slide col-12 desaparece" data-ride="carousel">

          <!-- Indicadores del carousel -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- Imágenes del carousel -->
          <div class="carousel-inner">

            <div class="carousel-item active">
              <a href="#">
                <img src="img/carousel1.png" alt="...">
              </a>
            </div>

            <div class="carousel-item">
              <a href="#">
                <img src="img/carousel2.png" alt="...">
              </a>
            </div>

            <div class="carousel-item">
              <a href="#">
                <img src="img/carousel3.png" alt="...">
              </a>
            </div>

          </div>

          <!-- Controles del carousel -->
          <div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

        </section>
      </div>
      <!-- Productos -->
      <section class="col-12 row">
        <div class="products-container col-12 row">

          @forelse ($products as $product)
          <!-- col-4 -->
            <article class="col-xs-12 col-md-6 col-lg-4">
              <img class="index-product" src="/storage/IMGproduct/{{$product->img}}" alt="">
              <p class="col-12">Nombre: {{$product->name}}</p>
              <p class="col-12">Descripción: {{$product->description}}</p>
              <p class="col-12">Precio: ${{$product->price }}</p>
              <!--<p class="col-12">Técnica</p>
              <p class="col-12">Precio</p>-->
              
            @guest
                <!-- Le saque al boton la clase -primary que es la que le da el color azul cuando se cliquea, viene por defecto en laravel -->
                <a href="{{ route('login') }}" class="btn btn boton col-7 offset-3">Agregar al carrito</a>
                @else
                  <!-- El ['productId' => $product->id] es un parametro requerido que le pedi a la route del addProduct -->
                  <form action="/verProduct/{{$product->id}}" method="get">
                  @csrf
                    <!-- <div class="col-8 offset-1 boton"> -->
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      <button type="submit" class="btn btn boton col-7 offset-3">Agregar al carrito</button>
                    <!-- </div> -->
                    <br>

                  </form>
              @endguest
            </article>
              @empty
            @endforelse
          </div>
        </section>
    </div>
  </main>
@endsection