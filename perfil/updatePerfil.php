<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> actualizar demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$nombre=$_POST["nombre"];
$tipo=$_POST["tipo"];
$fecha_nacimiento=$_POST["fecha_nacimiento"];

echo "Edicion en proceso . . . . </br>";
include_once("PerfilCollector.php");
$PerfilCollectorObj= new PerfilCollector();
$PerfilCollectorObj->UpdatePerfil($id,$nombre);
echo "id: ".$id." actualizado a:".$nombre." </br>";
?>

<div class="text-fieldsl">
         <a href='readPerfil.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
