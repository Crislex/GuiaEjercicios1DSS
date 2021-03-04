
<!DOCTYPE html>
<html>
<head>
	<head><link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<center>
		<br>
		<br>
<?php

 $valor1 = $_GET['val1'];
 $valor2 = $_GET['val2'];
 $valor3 = $_GET['val3'];
 $valor4 = $_GET['val4'];


$pareleo = (1/$valor1)+(1/$valor2)+(1/$valor3)+(1/$valor4);
$resu = (1/$pareleo);

$serie = ($valor1+$valor2+$valor3+$valor4);

       echo "<br>";
       echo "<br>";       echo "<br>";
       echo "<br>";
       echo"<br/> &nbsp; El de la resistencia en paralelo es de ". $resu." kilohmios";
       echo "<br>";
       echo "<br>";
       echo"<br/> &nbsp; El de la resistencia en serie es de ". $serie." kilohmios";
              echo "<br>";
       echo "<br>";
       echo' <a class="btn btn-primary" href="index.html">Regresar</a>';
?>
</center>
</body>
</html>