<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" >
</head>
<h1 align="center">Ejercicio 2</h1>
<body >
<a href="index.php">Inicio</a>
<?php
	define(TAM,10);  
	echo "<table border=1>";

	$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{
	 if ($n1 % 2 == 0)
	 echo "<tr bgcolor=yellow>";
	 else
	 echo "<tr>";
		 for ($n2=1; $n2<=TAM; $n2++)
	 {
			 echo "<td>", $n, "</td>";
			 $n=$n+1;
	 }
	 echo "</tr>";
}
echo "</table>";
?>	

</body>
</html>