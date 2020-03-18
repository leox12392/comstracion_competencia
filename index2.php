<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <meta http-equiv="Content-type"content="text/html;charset=utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Recetas Gastronomicas Cochabamba</title>
    </head>
    <nav>
	<ul>
            <li><a href="index.php"><input  class="btn btn-danger" type="submit" name="submit" value="Salir"/></a></li>
            
        </ul>
    </nav>
    
    <body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
	<center><div class="tit"><h2 >Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action='validar.php' method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control"  />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control"  />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
    
</form>
</div>
<?php
if(isset($_POST['submit'])){
require("registro.php");
}
?>
<!--Fin formulario registro -->
</td>
</tr>
</table>
</div></center></div></center>	
</body>
</html>
