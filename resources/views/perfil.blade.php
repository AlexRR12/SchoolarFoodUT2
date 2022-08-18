
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perfil de Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="/editar/{{Auth::user()->id}}" class="needs-validation" novalidate>
                       @csrf
                        {{ method_field('PUT') }}

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{Auth::user()->nombre}}" required autocomplete="nombre" autofocus >

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label for="apellido" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{Auth::user()->apellido}}" required autocomplete="name" autofocus >

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="edad" class="col-md-4 col-form-label text-md-end">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="edad" type="text" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{Auth::user()->edad}}" autofocus >

                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label disable for="matricula" class="col-md-4 col-form-label text-md-end">{{ __('Matricula') }}</label>

                            <div class="col-md-6">
                                <input id="matricula" type="text" class="form-control @error('matricula') is-invalid @enderror" name="matricula" value="{{Auth::user()->matricula}}" required autocomplete="matricula" autofocus readonly>

                                @error('matricula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="correo" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{Auth::user()->correo}}" required autocomplete="correo" >

                                @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                        <div class="row mb-0">

                            <div class="col-md-6 offset-md-4">


                                <a class="btn btn-primary" href="/" class="btn btn-secondary">Cancelar</a>
                               
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar datos') }}
                                </button>
                               <hr>
                               <center>

                                <a class="btn btn-primary" href="/changepass" class="btn btn-secondary">Actualizar Contraseña</a>
                                

                                    </center>
                                 

                               

                            </div>
                             
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script >
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>