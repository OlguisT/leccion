<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> ELIMINAR demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

$id=$_GET["id"];

include_once("PerfilCollector.php");
$PerfilCollectorObj= new PerfilCollector();
$PerfilCollectorObj->deletePerfil($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='readPerfil.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
