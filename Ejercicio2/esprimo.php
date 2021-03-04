<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<center>
	<br>
	<br>
<?php
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
$numero = $_POST['inputNumPrimo'];
$contadorPrimo = 0;
for($contador = 1; $contador<=$numero; $contador++){
	if($numero % $contador == 0){
		$contadorPrimo = $contadorPrimo + 1;
	}
}

if($numero == 1 or $contadorPrimo == 2){
	echo "El numero ".$numero." es primo";
}
else{
	echo "El numero ".$numero." NO es primo, porque es divisible entre: ";

	for($contador = 1; $contador < $numero; $contador ++) {
        if ($numero % $contador == 0) {
        	echo'<br>';
echo'<br>';
            echo $contador.'	';
        }
}
}
echo'<br>';
echo'<br>';
       echo "<br>";

echo' <a class="btn btn-primary" href="index.html">Regresar</a>';
?>
</center>
</body>
</html>
