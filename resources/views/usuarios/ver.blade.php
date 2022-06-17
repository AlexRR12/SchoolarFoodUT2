<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body class="antialiased">
		<a href="/usuario">Ver listado de usaurios</a>
		<h2>Ver usuario<h2>
			<div>
			<p> Nombre: {{ $usuario->nombre}}</p>
			<p> Apellido: {{ $usuario->apellido}}</p>
			<p> Edad: {{ $usuario->edad}}</p>
			<p> Dirección: {{ $usuario->grupo}}</p>
			</div>
</body>
</html>