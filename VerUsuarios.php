<!DOCTYPE html>
<html>
  <head>

<?php  

include "ParametrosBD.php";


  		$conexion=mysqli_connect($servidor,$usuario,$password,$basededatos);
?>


</style>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Inicio</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="registrarse.php">Registrarse</a></span>
      		<span class="right"><a href="login.php">Login</a></span>
      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
	
<?php
				
				echo"
				<span><a href='layout.php?mail=$email'>Inicio</a></spam>";
				?>
			<?php
				
				echo"
				<span><a href='preguntas.php?mail=$email'>Insertar Pregunta</a></spam>";
				?>
				<?php
				
				echo"
				<span><a href='VerPreguntasConFoto.php?mail=$email'>Ver Preguntas</a></spam>";
				?>
				<?php
				
				echo"
				<span><a href='VerPreguntasXML.php?mail=$email'>Ver Preguntas XML</a></spam>";
				?>
<?php
				
				echo"
				<span><a href='creditos.php?mail=$email'>Creditos</a></spam>";
				?>
				
			
			
	</nav>
    <section class="main" id="s1">
    
	<div>

	<h3>Estas son los usuarios almacenados en la base de datos</h3>

<br>
<center>

<table border="1"style="background-color: white; text-align: center;">
	<tr>
		<td><strong>EMAIL</strong></td>	
		<td><strong>Nombre y Apellido</strong></td>	
		<td><strong>Imagen</strong></td>
	</tr>
<?php 
$sql= "SELECT * FROM usuarios";
$resultado= mysqli_query($conexion,$sql);

while($imprimir=mysqli_fetch_array($resultado)){
 ?>
<tr>
	<td><br>&nbsp;&nbsp;<?php echo $imprimir['email'] ?>&nbsp;&nbsp;<br></td>
	<td>&nbsp;&nbsp;<?php echo $imprimir['nombre']?>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;<?php echo $imprimir['imagen']?>&nbsp;&nbsp;</td>
		
</tr>



 <?php  
}
?>

</table>


</center>


	</div>
    </section>
	<footer class='main' id='f1'>
		<a href='https://github.com/asierblaz/LAB2C-SW'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
