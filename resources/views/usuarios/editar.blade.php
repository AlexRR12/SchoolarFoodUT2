<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<title></title>
	<style>
		body {
		 margin: auto;
		 padding: 50px;
		}
		input[type=text], select {
		 width: 100%;
		 padding: 12px 20px;
		 margin: 8px 0;
		 display: inline-block;
		 border: 1px solid #ccc;
		 border-radius: 4px;
		 box-sizing: border-box;
		}
		input[type=submit] {
		 width: 100%;
		 background-color: #4CAF50;
		 color: white;
		 padding: 14px 20px;
		 margin: 8px 0;
		 border: none;
		 border-radius: 4px;
		 cursor: pointer;
		}
		input[type=submit]:hover {
		 background-color: #45a049;
		}
		div {
		 border-radius: 5px;
		 background-color: #f2f2f2;
		 padding: 20px;
		}

		</style>
</head>
<body>
<form action="/usuarios/editar/{{ $usuario->id}}" method ="POST">
@csrf
{{ method_field('PUT') }}
<label>Nombre:</label>
<input type="text" name="nombre" placeholder="Su nombre" value="{{ $usuario->nombre}}">
<label>Apellido:</label>
<input type="text" name="apellido" placeholder="Su Apellido" value="{{ $usuario->apellido}}">
<label>Edad:</label>
<input type="text" name="edad" placeholder="Su edad" value="{{ $usuario->edad}}">
<label>Dirección:</label>
<input type="text" name="grupo" placeholder="Su grupo" value="{{ $usuario->grupo}}">
<input type="submit" value="Guardar">
</form>
</body>
</html>