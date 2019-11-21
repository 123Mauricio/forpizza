<!DOCTYPE html>
<html>
<head>
	<title>Cheese pizza</title>
	<meta charset="utf-8">

	<!--iconos-->
	<link rel="stylesheet" type="text/css" href="css/iconos.css">
	<link rel="stylesheet" type="text/css" href="css/icons-menu.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="icon" type="img/png" href="img/Cheese-logo.png">

	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/BANNERESTABLE.css">
	<link rel="stylesheet" type="text/css" href="css/BARRADESCROLL.css">
	<link rel="stylesheet" type="text/css" href="css/FOOTER.css">
	<link rel="stylesheet" type="text/css" href="css/KANKIN.css">
	<link rel="stylesheet" type="text/css" href="css/estilosCHEESE.css">
	<link rel="stylesheet" type="text/css" href="css/MENU.css">
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
				<a href="{{url('estable')}}"><i class="fa fa-cutlery" aria-hidden="true"></i> Establecimientos</a>
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

	<br><br>

	<!--banner-->
	<div class="banner">
		<img src="img/banner.jpg" class="banner-img">
		<div class="banner-contenido">Cheese<br><b>¡Comer en Cheese Pizza es mucho más rico!</b></div>
	</div>

	<br><br>
	<!--INFO-->
	<table align="center" width="1220" class="kankin">
		<tr>
			<td><p align="left"><img src="img/Cheese-logo.png" class="log"></p></td>
			<td><p align="right"><h4><i class="fa fa-phone" aria-hidden="true"></i>  999-230-0266 ó 999-178-9721<br><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 30 No.233 / 31 & 32 Col.Centro<br><br><i class="fa fa-maps" aria-hidden="true"></i>Horario:<br>Lunes a Jueves de 5:30pm a 11:00pm<br>Viernes a Domingo de 5:30pm a 11:30pm</h4></td>
		</tr>
	</table>

	<br><br>
	<!--linea-->
	<table align="center" width="1200" bgcolor="black" class="linea">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>
	<br><br>

	<!--pizzas-->
	<p align="center" class="encabezado"><font>Nuestras pizzas</font></p>

	<br><br>
	<!--linea-->
	<table align="center" width="1200" bgcolor="black" class="linea">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>
	<br><br>

	<br>
	<!--LAS PIZZAS-->
	<table align="center" width="1220" class="pizzasK">
		<!--IMAGENES-->
		<tr>
			<td><p align="center"><img src="img/peper01.jpg" width="110" class="pizzas"></p></td>
			<td><p align="center"><img src="img/española01.jpg" width="100" class="pizzas"></p></td>
			<td><p align="center"><img src="img/mexicana01.jpg" width="100" class="pizzas"></p></td>
			<td><p align="center"><img src="img/doble01.jpg" width="100" class="pizzas"></p></td>
		</tr>
		<!--INFO-->
		<tr>
			<td><p class="tipo"><h2>Clásica</h2></p></td>
			<td><p class="tipo"><h2>K'an K'in</h2></p></td>
			<td><p class="tipo"><h2>Mexicana</h2></p></td>
			<td><p class="tipo"><h2>Especial</h2></p></td>
		</tr>
		<!--PRECIO-->
		<tr>
			<td><p><h3>$80.00MX</h3></p></td>
			<td><p><h3>$120.00MX</h3></p></td>
			<td><p><h3>$95.00MX</h3></p></td>
			<td><p><h3>$100.00MX</h3></p></td>
		</tr>
		<!--botones-->
		<tr>
			<td>
				<p align="center"><a href="{{url('Pedido')}}"><input type="submit" value="Pedir" class="btn-pedir"></a></p>
			</td>
			<td>
				<p align="center"><a href="{{url('Pedido')}}"><input type="submit" value="Pedir" class="btn-pedir"></a></p>
			</td>
			<td>
				<p align="center"><a href="{{url('Pedido')}}"><input type="submit" value="Pedir" class="btn-pedir"></a></p>
			</td>
			<td>
				<p align="center"><a href="{{url('Pedido')}}"><input type="submit" value="Pedir" class="btn-pedir"></a></p>
			</td>
		</tr>
	</table>

	<br><br><br><br>

	<!---------------------------------Footer---------------------------------------->
	<footer>
		<div class="Contenedor-all">
			<div class="contene-body">
				
				
				<div class="columna1">
					<h1 class="h1">Acerca de Looking For Pizza</h1>
					<p>Looking For Pizza fué elaborado para facilitarte la busqueda de tu establecimiento favorito, cabe recalcar que talvez contenga pocas funciones; esto se mejorará en verciones futuras.</p>
				</div>

				<div class="columna2">
					<h1 class="h1">Redes Sociales</h1>

					<div class="row">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<a href="https://www.facebook.com/Looking-For-Pizza-104705777548378/?modal=admin_todo_tour" target="_blanck"><label>Síguenos en Facebook</label></a>
					</div>

					<div class="row">
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<a href="https://twitter.com/LookingPizza" target="_blanck"><label>Síguenos en Twitter</label></a>
					</div>

					<div class="row">
						<i class="fa fa-instagram" aria-hidden="true"></i>
						<a href="https://www.instagram.com/lforpizza/?hl=es-la" target="_blanck"><label>Síguenos en Instagram</label></a>
					</div>
				</div>

				<div class="columna3">
					<h1 class="h1">Contáctanos</h1>

					<div class="row2">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<label>Úbicanos en Izamal Yucatán, Calle 37 #299 x 30 y 32 Col. Centro</label>
					</div>

					<div class="row2">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<label>999-430-1133</label>
					</div>

					<div class="row2">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<label>lforpizza@gmail.com</label>
					</div>

				</div>
			</div>
		</div>

		<div class="contene-footer">
			<div class="footer">
				
				<div class="copyright">
					© 2019 Todos los derechos reservados | Looking For Pizza
				</div>

				<div class="uso">
					<p class="U"><a href="uso">¿Cómo usar Looking For Pizza?</a></p>
				</div>

			</div>
		</div>
	</footer>

	

	<!--NUESTROS JS-->
	<script src="js/jquery.min.js"></script>
	<script src="js/headroom.min.js"></script>
	<script src="js/MENUK.js"></script>

</body>
</html>