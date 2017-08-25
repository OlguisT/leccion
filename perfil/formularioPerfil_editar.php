<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id=$_GET["id"];
echo "el valor de id es ".$id;
include_once("PerfilCollector.php");
include_once("perfil.php");
$PerfilCollectorObj= new PerfilCollector();
$ObjPerfil=$PerfilCollectorObj->showPerfil($id);
print_r($ObjPerfil);
?>
<h2>Editar Objeto Perfil</h2>
<form id="contact-form" action="updatePerfil.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id" id="id" type="text" value="<?php echo $ObjPerfil->getId(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjProvincia->getNombre(); ?>"  autofocus required/>

TIPO:	<input name="tipo" id="tipo" type="text" value="<?php echo $ObjProvincia->getTipo(); ?>"  autofocus required/>

Fecha_Nacimiento: <input name="fecha_nacimiento" id="fecha_nacimiento" type="text" value="<?php echo $ObjProvincia->getFecha_Nacimiento(); ?>"  autofocus required/>

<span><i class="fa fa-lock"></i></span>
</div>
<a href="readPerfil.php">Cancelar</a>
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
