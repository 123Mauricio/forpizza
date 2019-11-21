<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="icon" type="img/png" href="img/logo.png">
  </head>
  <body  background="img/banner.jpg">
    <section class="form-register">
      <h4>Registro</h4>
       <div> 
         <font size="5" ></font>
         <input type="text" class="controls" name="nombres" id="nombres" placeholder="Nombre">
       </div>
       
        <div>
         <font size="5"></font>
           <input type="text" class="controls"  name="apellidos" id="apellidos" placeholder="Apellido">
        </div>
        <div>
          <font size="5"></font>
         <input type="email" class="controls"  name="correo" id="correo" placeholder="Correo">
        </div>
        <div>
         <font size="6"></span>
          <input type="password" class="controls"  name="contraseña" id="contraseña" placeholder="Contraseña"></font>

        </div>

        <a href="{{url('INICIO')}}"><input class="botons" type="submit" value="Registrar" name=""></a>
        
        <a href="{{url('2')}}"><p>Tengo cuenta</p></a>
    </section>
 </body>
</html>