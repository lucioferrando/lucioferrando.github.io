<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gracias por Sumarte - Havanna PLUS</title>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>
<div class="php">
      <h1>Gracias por ponerte en contacto!</h1>
       <?php
	$destino="luciobayard@gmail.com";
	$remite="From:<Ferrando Lucio>luciobayard@gmail.com";
	$asunto="Contacto a Ferrando Lucio";
	$mensaje="Nombre: ".$_POST['nombre']."<br />";
	$mensaje.="E-mail: ".$_POST['email']."<br />";

	
	if (isset($_POST['nombre']) or isset($_POST['email']))
	{
	mail($destino,$asunto,$mensaje);
	echo "<h1>Ferrando Lucio:</h1><h4>Gracias por ponerte en contacto. Se enviará un email a tu casilla de correo con más información.</h4>";
	}else{
		echo "<h1>Ferrando Lucio</h1>No se pudo realizar el envio. Por favor complete todos los campos.<br />";
		echo "<a href='mail.php?id=04'>Intentar nuevamente</a>";
	}
	?>  
            </p>
</div>
</body>
</html>
