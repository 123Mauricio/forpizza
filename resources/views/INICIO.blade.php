<!DOCTYPE html>
<html>
<head>
	<title>Looking For Pizza</title>
	<meta charset="utf-8">

	<!--iconos-->
	<link rel="stylesheet" type="text/css" href="css/iconos.css">
	<link rel="stylesheet" type="text/css" href="css/icons-menu.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="icon" type="img/png" href="img/logo.png">

	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/MENU.css">
	<link rel="stylesheet" type="text/css" href="css/BANNER.css">
	<link rel="stylesheet" type="text/css" href="css/BARRADESCROLL.css">
	<link rel="stylesheet" type="text/css" href="css/TABINI.css">
	<link rel="stylesheet" type="text/css" href="css/FOOTER.css">
<body class="a">
	<header id="header">
		<nav class="menu">
			<div class="logo">
				<p class="TI" align="middle">Looking For Pizza</p>
				<a href="" class="btn-menu" id="btn-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</div>
			<div class="enlaces">
				<a href="{{url('INICIO')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
				<a href="{{url('estable')}}"><i class="fa fa-cutlery" aria-hidden="true"></i> Establecimientos</a>
				<a href="{{url('registro')}}"><i class="fa fa-user" aria-hidden="true"></i> Cerrar sesión</a>
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
		<div class="banner-contenido">¡La mejor página web para encontrar tu pizza favorita con el sabor artezanal!</div>
	</div>
	
	<!--contenedor-->
	<main class="main">
		<section class="grupo">
			<div class="contenedor">
				<h2 class="title">Bienvenido a Looking For Pizza</h2>
				<p class="txt"><b>Nuestro objetivo</b><br>Encontrar tu pizza favorita sin salir de casa.</p>
			</div>
		</section>
	</main>
	

	<!--establecimientos populares-->
	<p align="center" class="title-tablas"><font>Establecimintos populares</font></p>
	<p align="center" class="sub-tablas"><font>Los más recomendados</font></p>
	<br>
	<table align="center" width="1200" class="estable-popu">
		<!--imagenes-->
		<tr>
			<td><p align="center"><a href="{{url('Kankin')}}"><img src="img/Kankin-logo.png" class="popu-img" width="190"></a></p></td>
			<td><p align="center"><a href="{{url('Cheese')}}"><img src="img/Cheese-logo.png" class="popu-img" width="150"></a></p></td>
			<td><p align="center"><a href="{{url('Smallville')}}"><img src="img/Smallville-logo.png" class="popu-img" width="250"></a></p></td>
			<td><p align="center"><a href="{{url('Pizzamaleña')}}"><img src="img/Pizzamaleña-logo.png" class="popu-img" width="200"></a></p></td>
		</tr>
		<!--nombres-->
		<tr>
			<td>
				<h2 align="center"><b>K'an k'in</b></h2>
			</td>
			<td>
				<h2 align="center"><b>Cheese</b></h2>
			</td>
			<td>
				<h2 align="center"><b>Smallville</b></h2>
			</td>
			<td>
				<h2 align="center"><b>La Pizzamaleña</b></h2>
			</td>
		</tr>
		<!--botones-->
		<tr>
			<td>
				<p align="center"><a href="{{url('Kankin')}}"><input type="submit" value="Ver" class="btn-ver"></a></p>
			</td>
			<td>
				<p align="center"><a href="{{url('Cheese')}}"><input type="submit" value="Ver" class="btn-ver"></a></p>
			</td>
			<td>
				<p align="center"><a href="{{url('Smallville')}}"><input type="submit" value="Ver" class="btn-ver"></a></p>
			</td>
			<td>
				<p align="center"><a href="{{url('Pizzamaleña')}}"><input type="submit" value="Ver" class="btn-ver"></a></p>
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
	<script src="js/MENU.js"></script>
</body>
</html>