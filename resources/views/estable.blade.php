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
	<link rel="stylesheet" type="text/css" href="css/estilosSMALL.css">
	<link rel="stylesheet" type="text/css" href="css/KANKIN.css">
</head>
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
		<div class="banner-contenido">¡Encuentra tus establecimientos favoritos aquí!</div>
	</div>
	
	<!--contenedor-->
	<main class="main">
		<section class="grupo">
			<div class="contenedor">
				<h2 class="title">Bienvenido a la sección de Establecimientos</h2>
				<p class="txt">Aquí podrás ver todos los establecimienos que se encuentran el la ciudad<br>y de igual forma podrás selecionar tu favorita<br>para buscar la pizza que deceas.</p>
			</div>
		</section>
	</main>
	

	<!--establecimientos populares-->
	<p align="center" class="title-tablas"><font>Establecimientos populares</font></p>
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

	<br><br>
	<br><br>
	<!--linea-->
	<table align="center" width="1200" bgcolor="black" class="linea">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>
	<br><br>

	<!----------------------------establecimientos------------------------------------->
	<p align="center" class="title-tablas"><font>Todos Los Establecimintos</font></p>
	<br><br>
	<!--linea-->
	<table align="center" width="1200" bgcolor="black" class="linea">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>

	<!--------------------------------------Cheese------------------------------------------->
	<br><br>
	<!--linea-->
	<table align="center" width="1200" class="linea2">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>
	<br><br>
	<p align="center" class="encabezado"><font>Cheese pizza</font></p>
	<!--INFO-->
	<table align="center" width="1220" class="kankin">
		<tr>
			<td><p align="left"><img src="img/Cheese-logo.png" class="log"></p></td>
			<td><p align="right"><h4><i class="fa fa-phone" aria-hidden="true"></i>  999-230-0266 ó 999-178-9721<br><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 30 No.233 / 31 & 32 Col.Centro<br><br><i class="fa fa-maps" aria-hidden="true"></i>Horario:<br>Lunes a Jueves de 5:30pm a 11:00pm<br>Viernes a Domingo de 5:30pm a 11:30pm</h4><br>
			<p align="right"><a href="{{url('Cheese')}}"><input type="submit" value="Ver" class="btn-ver"></a></p></td>
		</tr>
	</table>
	<br><br>
	<table align="center" width="1200" class="linea2">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>

	<!--------------------------------------Chong------------------------------------------->

	<br><br>
		<p align="center" class="encabezado"><font>Chong Lee</font></p>
	<!--INFO-->
	<table align="center" width="1220" class="kankin">
		<tr>
			<td><p align="left"><img src="img/Chong-logo.png" class="log"></p></td>
			<td><p align="right"><h4><i class="fa fa-phone" aria-hidden="true"></i> 988-103-4273<br><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 30 No.233 / 31 & 32 Col.Centro<br><br><i class="fa fa-maps" aria-hidden="true"></i>Horario:<br>Lunes a Jueves de 5:30pm a 11:00pm<br>Viernes a Domingo de 5:30pm a 11:30pm</h4><br>
			<p align="right"><a href="{{url('Chong')}}"><input type="submit" value="Ver" class="btn-ver"></a></p></td>
		</tr>
	</table>
	<br><br>
	<table align="center" width="1200" class="linea2">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>

	<!--------------------------------------Fratelli's------------------------------------------->

	<br><br>
		<p align="center" class="encabezado"><font>Fratelli's Pizza</font></p>
	<!--INFO-->
	<table align="center" width="1220" class="kankin">
		<tr>
			<td><p align="left"><img src="img/Fratellis-logo.png" class="log"></p></td>
			<td><p align="right"><h4><i class="fa fa-phone" aria-hidden="true"></i> 999-363-3322<br><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 30 No.299 x 23 Col.Centro<br><br><i class="fa fa-maps" aria-hidden="true"></i>Horario:<br>Lunes a Jueves de 6:30pm a 10:30pm<br>Viernes a Domingo de 6:30pm a 11:00pm</h4><br>
			<p align="right"><a href="{{url('Fratellis')}}"><input type="submit" value="Ver" class="btn-ver"></a></p></td>
		</tr>
	</table>
	<br><br>
	<table align="center" width="1200" class="linea2">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>

	<!--------------------------------------Italian's------------------------------------------->

	<br><br>
	<p align="center" class="encabezado"><font>Italian's Pizza</font></p>
	<!--INFO-->
	<table align="center" width="1220" class="kankin">
		<tr>
			<td><p align="left"><img src="img/Italian's-logo.png" class="log"></p></td>
			<td><p align="right"><h4><i class="fa fa-phone" aria-hidden="true"></i> 988-966-3455<br><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 46 No.309 A / 33 & 35 Col. Benito Juárez<br><br><i class="fa fa-maps" aria-hidden="true"></i>Horario:<br>Lunes a Viernes de 6:00pm a 11:00pm<br>Sábado y Domingo de 6:00pm a 12:00am</h4><br>
			<p align="right"><a href="{{url('Italians')}}"><input type="submit" value="Ver" class="btn-ver"></a></p></td>
		</tr>
	</table>
	<br><br>
	<table align="center" width="1200" class="linea2">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>

	<!--------------------------------------K'an K'in------------------------------------------->

	<br><br>
		<p align="center" class="encabezado"><font>K'an K'in</font></p>
	<!--INFO-->
	<table align="center" width="1220" class="kankin">
		<tr>
			<td><p align="left"><img src="img/Kankin-logo.png" class="log"></p></td>
			<td><p align="right"><h4><i class="fa fa-phone" aria-hidden="true"></i> 988-103-0100<br><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 30 No.233 / 31 & 32 Col.Centro<br><br><i class="fa fa-maps" aria-hidden="true"></i>Horario:<br>Lunes a Jueves de 5:30pm a 11:00pm<br>Viernes a Domingo de 5:30pm a 11:30pm</h4><br>
			<p align="right"><a href="{{url('Kankin')}}"><input type="submit" value="Ver" class="btn-ver"></a></p></td>
		</tr>
	</table>
	<br><br>
	<table align="center" width="1200" class="linea2">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>

	<!--------------------------------------Pizzamaleña------------------------------------------->

	<br><br>
	<p align="center" class="encabezado"><font>La Pizzamaleña</font></p>
	<!--INFO-->
	<table align="center" width="1220" class="kankin">
		<tr>
			<td><p align="left"><img src="img/Pizzamaleña-logo.png" class="log"></p></td>
			<td><p align="right"><h4><i class="fa fa-phone" aria-hidden="true"></i> 988-103-1729<br><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 27 No.303 / 34 & 36 Col.Centro<br><br><i class="fa fa-maps" aria-hidden="true"></i>Horario:<br>Lunes a Viernes de 5:30pm a 11:00pm<br>Sábado y Domingo de 5:30pm a 12:00am</h4><br>
			<p align="right"><a href="{{url('Pizzamaleña')}}"><input type="submit" value="Ver" class="btn-ver"></a></p></td>
		</tr>
	</table>
	<br><br>
	<table align="center" width="1200" class="linea2">
		<tr>
			<tr>
				
			</tr>
		</tr>
	</table>

	<!--------------------------------------Smallville------------------------------------------->

	<br><br>
	<p align="center" class="encabezado"><font>Smallville</font></p>
	<!--INFO-->
	<table align="center" width="1220" class="Small">
		<tr>
			<td><p align="left"><img src="img/Smallville-logo.png"></p></td>
			<td><p align="right"><h4><i class="fa fa-phone" aria-hidden="true"></i> 988-103-1729<br><i class="fa fa-map-marker" aria-hidden="true"></i> Calle 46 No.A / 33 y 35 Col.Centro <br><br><i class="fa fa-maps" aria-hidden="true"></i>Horario:<br>Lunes a Viernes de 6:00pm a 11:00pm<br>Sábado y Domingo de 6:00pm a 12:00am</h4><br>
			<p align="right"><a href="{{url('Smallville')}}"><input type="submit" value="Ver" class="btn-ver"></a></p></td>
		</tr>
	</table>
	<br><br>
	<table align="center" width="1200" class="linea2">
		<tr>
			<tr>
				
			</tr>
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