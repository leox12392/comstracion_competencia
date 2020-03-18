<!DOCTYPE html>
<html>
<head>
       
     

</head>
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="">Principal</a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>
                         <li class="special">
                             
				       <a href="#menu" class="menuToggle"><span>Recetas</span></a>
			                   <div id="menu">
					      <ul>
                                                    <li><a href="Desayuno.php">Desayuno</a></li>
                                                    <li><a href="Almuerzo.php">Almuerzo</a></li>
                                                    <li><a href="Cena.php">Cena</a></li>
					            <li><a href="usuario.php">Cerrar</a></li>
                                                 <!-- /.<li class="actual"><a href="registrarecetas.php">Crear Recetas</a></li>--> 
					      </ul>
				           </div>
			   </li>
		</ul>
              
	  </div><!-- /.nav-collapse -->
          <a href="menu.php"></a>
	</div>
  </div><!-- /navbar-inner -->
    
</div>

</html>