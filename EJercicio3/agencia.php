
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<center>
		<br>
		<br>
<?php

 $ptri1 = $_GET['perisu1'];
 $ptri2 = $_GET['perisu2'];
 $ptri3 = $_GET['perisu3'];
 $ptri4 = $_GET['perisu4'];


 $vtri1 = $_GET['valle1'];
 $vtri2 = $_GET['valle2'];
 $vtri3 = $_GET['valle3'];
 $vtri4 = $_GET['valle4'];


 $lotri1 = $_GET['lomas1'];
 $lotri2 = $_GET['lomas2'];
 $lotri3 = $_GET['lomas3'];
 $lotri4 = $_GET['lomas4'];
echo "<center>";
echo "<br>";
echo "<br>";
echo "<p>Matriz de ventas de la Empresa Automotriz Carro Fácil</p>";
echo "<br>";
echo "<br>";
echo "<table class='table table-success table-striped'>";
echo "<tr>";
echo "<td><strong>Agencia</strong></td>";
echo "<td><strong>Perisur</strong></td>";
echo "<td><strong>Valle</strong></td>";
echo "<td><strong>Lomas</strong></td>";
echo "</tr>";

echo "<tr>";
echo " <td>Trimestre 1</td>";
echo "<td> "."$".$ptri1 . "</td>";
echo "<td> "."$".$vtri1 . "</td>";
echo "<td> "."$".$lotri1 . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Trimestre 2</td>";
echo "<td> "."$".$ptri2 . "</td>";
echo "<td> "."$".$vtri2 . "</td>";
echo "<td> "."$".$lotri2 . "</td>";
echo "</tr>";

echo "<tr>";
echo " <td>Trimestre 3</td>";
echo "<td> "."$".$ptri3 . "</td>";
echo "<td> "."$".$vtri3 . "</td>";
echo "<td> "."$". $lotri3 . "</td>";
echo "</tr>";

echo "<tr>";
 echo "<td>Trimestre 4</td>";
 echo "<td> "."$".$ptri4 . "</td>";
 echo "<td> "."$".$vtri4 . "</td>";
 echo "<td> "."$".$lotri4 . "</td>";
echo "</tr>";
echo "</table>";
$Perisur = $ptri1 + $ptri2 + $ptri3 + $ptri4;
$Valle = $vtri1 + $vtri2 + $vtri3 + $vtri4;
$Lomas = $lotri1 + $lotri2 + $lotri3 + $lotri4;
$anual = $Perisur + $Valle + $Lomas;

//Promedio

$suma = $ptri3 + $vtri3 + $lotri3;
$promet = $suma / 3;

echo "<br>";
echo "¿Cuál fue el total anual de ventas de la agencia Lomas?"."<br>"." Las ventas anuales de la agencia lomas fue de : ".$anual." dólares";

$segutri = (($lotri1 + $lotri2 + $lotri3 + $lotri4) / 4);
echo "<br>";
echo "<br>";
echo " ¿Cuál fue el promedio de ventas de Carro Fácil en el segundo trimestre del año?"."<br>"." El promedio de ventas de Carro Fácil en el segundo trimestre del año fue de : ".$segutri." dólares";
echo "<br>";
echo "<br>";
if ($ptri3 > $promet ) {
	echo "La empresa Perisur vendio mas que el promedio";
}if ($vtri3 >  $promet) {
	echo "La empresa Valle vendio mas que el promedio";
}if ($lotri3 >  $promet) {
	echo "La empresa Lomas vendio mas que el promedio";
}
echo "</center>";
?>
</center>
</body>
</html>
