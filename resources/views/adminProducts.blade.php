@include("head")
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

<br>
<br>
<body>
    
@forelse($products as $product)
      <h1>{{$product->img}}</h1>
      <br>
      <h1>{{$product->name}}</h1>
      <br>
      <h1>{{$product->description}}</h1>
      <br>
      <h1>{{$product->price}}</h1>
      <br>
    @empty
    <p>
    No hay productos
    </p>
    @endforelse

 <br>
 <br>
</body>
<footer class="row">
 <br>
 <br>
 <br>
 <br>

</footer>
