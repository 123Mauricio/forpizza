<!DOCTYPE html>
<html>
<head >
		<title>Iniciar sesion</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
		<link rel="icon" type="img/png" href="img/logo.png">

	</head>
	<body background="img/banner.jpg">
		
		<section class="form-register">
	  <h4>inisiar secion</h4>
	  <div>
	  	<font size="4"></font>
	    <input type="text" class="controls" name="nombres" id="nombres" placeholder="usuario">
	  </div>
	  <div>
	  	<font size="4"></font>
	    <input type="password" class="controls"  name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
	   </div>

	    <a href="{{url('INICIO')}}"><input class="botons" type="submit" value="iniciar sesión" name=""></a>
	    <h1>Looking For Pizza</h1>
	</section>
</body>

</html>