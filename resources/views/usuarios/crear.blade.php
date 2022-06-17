@extends('layout')

@section('title', 'Registro')

@section('content')

        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Formulario</span>
                                <span class="section-heading-lower">Registro</span>
                            </h2>
                            <form action="/usuarios/crear" method ="POST">
                             @csrf
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text"  class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Nombre">
                          </div>
                           <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Apellido</label>
                            <input type="text"  class="form-control" name="apellido" aria-describedby="emailHelp" placeholder="Apellido">
                          </div>
                           <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Edad</label>
                            <input type="Number"  class="form-control" name="edad" aria-describedby="emailHelp" placeholder="Edad"  >
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Matricula</label>
                            <input type="text"  class="form-control" name="matricula" aria-describedby="emailHelp" placeholder="matricula" >
                          </div>
                           <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                            <input type="email"  class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Correo Electronico">
                            <div id="emailHelp" class="form-text">Los datos no se compartiran con ninguna otra persona.</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="pass" placeholder="Contraseña">
                          </div>
           <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">tipo</label>
                            <input type="Number"  class="form-control" name="tipousuario" aria-describedby="emailHelp" placeholder="tipo" min="1" max="2">
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Aceptar terminos y condiciones </label>
                          </div>
                          <button type="submit" value="Guardar" class="btn btn-primary">Enviar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection