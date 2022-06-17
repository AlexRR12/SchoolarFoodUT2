@extends('layout')

@section('title', 'Listado')

@section('content')

<section class="page-section cta">
	<div class="container">
		<div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Listado</span>
                                <span class="section-heading-lower">Usuarios</span>
                            </h2>
      <table class="table">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Edad</th>
			<th>Matricula</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Acciones</th>
		</tr>

		<a href="/usuarios/crear">Nuevo Usuario</a>

		@foreach ($usuario as $usuario)
		<tr>
			<td>{{ $usuario->nombre }}</td>
			<td>{{ $usuario->apellido }}</td>
			<td>{{ $usuario->edad }}</td>
			<td>{{ $usuario->matricula }}</td>
			<td>{{ $usuario->correo }}</td>
			<td>{{ $usuario->tipousuario }}</td>
			<td>
				
				<a href="/usuarios/ver/{{$usuario->id}}">Ver</a>
				<a href="/usuarios/editar/{{$usuario->id}}">Editar</a>
				<a href="/usuarios/eliminar/{{$usuario->id}}" onclick="return eliminarAlumno('Eliminar usuario')">Eliminar</a>
			</td>
		</tr>
		@endforeach

	</table>
                        </div>
                    </div>
                </div>
            </div>
	
</section>

@endsection