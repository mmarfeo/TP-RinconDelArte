@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('Completa tus datos') }}</center></div>

                <div class="card-body">
                <!-- Se agrega el encytipe="Mutiparte/form data para poder adjuntar la foto de perfil-->
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

<!-- Aca se agregan los campos del registro se cambia el nombre y se copia y pega segun lo necesario-->
                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--Apellido - Se copio de name y se modificaron algunos campos-->
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--Username - Se copio de name y se modificaron algunos campos-->
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>
                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus>
                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--Email -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--Fecha de nacimiento - Se copio de name y se modificaron algunos campos-->
                        <!-- <div class="form-group row">
                            <label for="fechaNac" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                            <div class="col-md-6">
                                <input id="fechaNac" type="date" class="form-control @error('fechaNac') is-invalid @enderror" name="fechaNac" value="{{ old('fechaNac') }}"  autocomplete="fechaNac" autofocus>
                                @error('fechaNac')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

<!--Fecha de nacimiento - Se copio de name y se modificaron algunos campos-->
                        <div class="form-group row">
                            <label for="fechaNac" class="col-md-4 col-form-label text-md-right">Provincia</label>
                            <div class="col-md-6">
                            <select name="provincia" id="provincias">
                                Provincia de Origen
                                </select>
                            </div>
                        </div>


<!--Genero - Se copio de name y se modificaron algunos campos-->
                         <!-- <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>
                            <div class="col-md-2">
                                <input id="genero" type="radio" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('Hombre') }}"  autocomplete="genero" autofocus> Hombre
                                <input id="genero" type="radio" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('Mujer') }}"  autocomplete="genero" autofocus> Mujer
                                <input id="genero" type="radio" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('Otro') }}"  autocomplete="genero" autofocus> Otro
                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

<!--Foto de Perfil - Se copio de name y se modificaron algunos campos-->
                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Foto de Perfil') }}</label>
                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar" autofocus>
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--Contraseña - ya estaba-->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--Confirmar Contraseña - ya estaba-->
                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <!-- Le saque al boton la clase -primary que es la que le da el color azul cuando se cliquea, viene por defecto en laravel -->
                                <button type="submit" class="btn btn boton">
                                    {{ __('Crear Cuenta') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "El formato no es válido";
    }
});

function validarNombre(){
            console.log("valido");
            var nombre = document.querySelector("input#name");
            if(nombre.value == ""){
                var spanNombre = document.querySelector("span#errorName");
                spanNombre.innerHTML = "El nombre es obligatorio.";
            }else{
                var spanNombre = document.querySelector("span#errorNombre");
                spanNombre.innerHTML = "";
            }
        }
        var enviar = document.querySelector("button");
        enviar.addEventListener("click",function(){
            validarNombre();
        });

// API

        fetch("https://apis.datos.gob.ar/georef/api/provincias")
.then(function(respuesta){
    return respuesta.json();
})
.then(function(datosJSON){
    var select = document.querySelector("select#provincias");
    console.log(select.innerHTML);
    for(var i = 0; i < datosJSON.provincias.length; i++){
        //console.log(datosJSON.provincias[i].nombre);
        select.innerHTML = 
        select.innerHTML + "<option value='"+datosJSON.provincias[i].nombre+"'>"+datosJSON.provincias[i].nombre+"</option>";
    }
    console.log(select.innerHTML);
})
.catch(function(error){
    console.log(error);
});
</script>
@endsection