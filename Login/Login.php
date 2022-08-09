<?php

session_start();
?>



<!DOCTYPE html>
<html>
<head>
	
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/Estilo.css">
	<link rel="icon" href="imagenes/Racher.png">
	<title>LOGIN</title> 

</head>

<body>


	<header class="header">



		<nav class="nav">


			<?php

		include "Menu.php";

	 	?> 

		</nav>

	</header>


	<section>
		
		<form class="formulario"  name="formulario" method="post" action="Login.php">
      <table width="268" border="5" style="margin: 0 auto"; cellpadding="5" cellspacing="5" bgcolor="#1CA996">
        <tr>
          <th colspan="2" scope="col">INICIAR SESIÓN</th>
        </tr>
        <tr>
          <td width="143">Usuario </td>
          <td width="76"><input name="txt_usuario" type="text" id="usuario" value=""> </td>
        </tr>
        <tr>
          <td>Contraseña</td>
          <td><input name="txt_contraseña" type="password" id="contraseña" value="" /></td>
        </tr>
        
        <tr>
          <td><input name="btn_ingresar" type="submit" id="opcion" value="INGRESAR" /></td>
          <td><input name="btn_registrar" type="submit" id="opcion" value="REGISTRAR" /></td>
        </tr>
      </table>
</form>


<?php


$usua=isset($_POST['txt_usuario']);
$contra=isset($_POST['txt_contraseña']);




if(isset($_POST['btn_ingresar'])){

   require 'Usuario.php';
   $ter=new Usuario();
   $ter->validarUsuario($usua,$contra);



}


	?>

	</section>



</body>
</html>