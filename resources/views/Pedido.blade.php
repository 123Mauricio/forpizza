<!DOCTYPE html>
<html>
<head>
	<title>Realiza tu pedido</title>
	<meta charset="utf-8">

	<!--iconos-->
	<link rel="stylesheet" type="text/css" href="css/iconos.css">
	<link rel="stylesheet" type="text/css" href="css/icons-menu.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="icon" type="img/png" href="img/LOGO.png">

	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/BANNERESTABLE.css">
	<link rel="stylesheet" type="text/css" href="css/BARRADESCROLL.css">
	<link rel="stylesheet" type="text/css" href="css/MENU.css">
	<link rel="stylesheet" type="text/css" href="css/Pedido.css">
</head>
<body class="a">
	<!--MENU-->
	<header id="headerK">
		<nav class="menu">
			<div class="logo">
				<p class="TI" align="middle">Looking For Pizza</p>
				<a href="" class="btn-menu" id="btn-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</div>
			<div class="enlaces">
				<a href="{{url('INICIO')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
				<a href="{{('estable')}}"><i class="fa fa-cutlery" aria-hidden="true"></i> Establecimientos</a>
				<a href=""><i class="fa fa-user" aria-hidden="true"></i> Cerrar sesión</a>
			</div>
			<div class="buscador">
				<input class="search" type="text" name="" placeholder="Buscar...">
				<a class="btn-buscar" href="">
					<i class="fa fa-search" aria-hidden="true"></i>
				</a>
			</div>
		</nav>
	</header>

	<br><br><br><br><br><br>

	<!---------------------------------imagen------------------------------------>

	<p align="center"><img src="img/clasica.png"></p>
	<p align="center" class="tipo">Clásica</p>
	<br>
	<table class="info">		
		<tr>
			<td><p align="center" class="tipo2">Grande</p></td>
			<td><p align="center" class="tipo2">Mediano</p></td>
			<td><p align="center" class="tipo2">Chico</p></td>
		</tr>
		<tr>
			<td><p align="center" class="tipo3">$90.00mx</p></td>
			<td><p align="center" class="tipo3">$65.00mx</p></td>
			<td><p align="center" class="tipo3">$50.00mx</p></td>
		</tr>
	</table>
	<br>
	<p align="center" class="tipo">Porfavor seleccione:</p>
	<!--------------------------------formulario--------------------------------->
	<div class="wrap">
		<form class="formulario">
			<div class="radio">
				<p><h2 class="Tamaño">Tamaño:</h2></p>

				<br>

				<input type="radio" name="Tamaño" id="Grande">
				<label for="Grande">Grande</label>

				<input type="radio" name="Tamaño" id="Mediano">
				<label for="Mediano">Mediano</label>

				<input type="radio" name="Tamaño" id="Chico">
				<label for="Chico">Chico</label>

				<br><br>

				<p><h2 class="Tamaño">Cantidad:</h2></p>
				<br>
				<select class="seleccion">
					<option>1 pizza</option>
					<option>2 pizzas</option>
					<option>3 pizzas</option>
					<option>4 pizzas</option>
					<option>5 pizzas</option>
					<option>6 pizzas</option>
					<option>7 pizzas</option>
					<option>8 pizzas</option>
					<option>9 pizzas</option>
					<option>10 pizzas</option>
				</select>

				<br><br>

				<p><h2 class="Tamaño">A nombre de:</h2></p>
				<br>
				<input type="text" name="nombre" class="nombre" placeholder="Escriba su nombre aquí">

				<br><br>

				<p><h2 class="Tamaño">Domicilio</h2></p>
				<br>
				<input type="text" name="nombre" class="nombre" placeholder="Escriba su Domicilio">

				<br><br>
				<input type="submit" value="Pedir" class="realizar">
			</div>
		</form>
	</div>

	<!--NUESTROS JS-->
	<script src="js/jquery.min.js"></script>
	<script src="js/headroom.min.js"></script>
	<script src="js/MENUK.js"></script>

</body>
</html>