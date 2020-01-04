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
    <div>
    @foreach($product as product)
      {{$product->img }}

      {{$product->name }}
      <br>
      {{$product->description }}
      <br>
      {{$product->price }}
    @endforeach

      </div>









           <div class="col-4 offset-4 boton">
           {{-- <a href="{{route('admin')}}" class="link-boton">Cargar producto</a> --}}
                <button type="submit"  name="button">Cargar producto</button>
           </div>

    </form>
 <br>
 <br>
</body>
<footer class="row">
 <br>
 <br>
 <br>
 <br>

</footer>
