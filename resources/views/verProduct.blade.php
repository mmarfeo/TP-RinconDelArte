@extends ("plantilla")

@include("head")

@section("titulo")
    Cuadros
@endsection


@section("Cuadros")

  
<div class="row">
    <div class="col-lg-10 offset-lg-2 col-xs-12 row">
      
        <section class="col-12">
                
          <br>
        </section>
<!-- 
        <section class="col-lg-5 col-xs-12 row offset-2">
          <div class="col-12">
          
          </div>  
        </section> -->

        <section class="col-lg-8 col-xs-12 offset-1">
         <div class="products-container col-12 row">
          <article class="col-12">
            <div class="col-12" >
            <br>
            <center><h3 class="offset-0">Cuadro</h3></center>
            <br>
            <center><img class="storage-ver-product" src="/storage/IMGproduct/{{$product->img}}" alt=""></center>
            </div>
            <br>
            <center>  
              <span class="col-6" ><strong>Nombre:</strong></span>
              <span class="col-6">{{$product->name}}</span>
              <br>
              <span class="col-6"><strong>Descripción:</strong></span>
              <span class="col-6">{{$product->description}}</span>
              <br>
              <span class="col-6"><strong>Precio:</strong></span>
              <span class="col-6">$ {{$product->price}}</span>
              
              <br>
              <!-- route('addProductToCart', ['productId' => $product->id])-->
              <form action="{{route('addProductToCart', ['productId' => $product->id])}}" method="post">
                @csrf         

                  
                  <label for="count"><strong>Cantidad</strong></label>
                  <select id="count" name="count">
                @for ($i = 1; $i <= 10; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
                  </select>
              <br/>
              <br>
            <button type="submit" class="btn btn boton col-4 offset-0">Confirmar cantidad</button>
          </form>
            </center>
        </article>
             
          </div>
          </div>
      </div>
    </div>
  </div>
  <br>
  
@endsection
  