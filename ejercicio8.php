
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body >
<a href="index.php">Inicio</a>
<form method="POST" action="ejercicio8.php"><!--ENVIA LOS VALORES DEL FORMULARIO MEDIANTE LA PETICION POST A LA MISMA PAGINA-->
<h1>Ejercicio 8</h1>	
		
		
		<p>Dia:</p>
	 <input name="di" type="text" id="dia" value=""/><br>
		<p>Mes</p>
	<input name="mes" type="text" id="mes" value=""/><br>
		<p>Año</p>
	 <input name="anio" type="text" id="anio" value=""/><br>
		
			
		
<input name="btnfecha" type="submit" id="btnfecha" value="ir  a fecha"/>
		
</form>
</body >
</html>




<?php
$dia=$_POST["dia"];
$mes=$_POST["mes"];
$anio=$_POST["anio"];

if ($mes=="01"){
		echo "$dia de enero $anio";
}
if ($mes=="02"){
		echo "$dia de febrero $anio";
}
if ($mes=="03"){
		echo "$dia de marzo $anio";
}
if ($mes=="04"){
		echo "$dia de abril $anio";
}
if ($mes=="05"){
		echo "$dia de mayo $anio";
}
if ($mes=="06"){
		echo "$dia de junio $anio";
}
if ($mes=="07"){
		echo "$dia de julio $anio";
}
if ($mes=="08"){
		echo "$dia de agosto $anio";
}
if ($mes=="09"){
		echo "$dia de septiembre $anio";
}
if ($mes=="10"){
		echo "$dia de octubre $anio";
}
if ($mes=="11"){
		echo "$dia de noviembre $anio";
}
if ($mes=="12"){
		echo "$dia de diciembre $anio";
}
"<BR>"
?>

