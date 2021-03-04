
<!DOCTYPE html>
<html>
<head>
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
$serie = ((1/$valor1)+(1/$valor2));
$resu = (1/$serie);

$pareleo = ($valor1+$valor2);

       echo "<br>";
       echo "<br>";       echo "<br>";
       echo "<br>";
       echo"<br/> &nbsp; El del capacitador en serie es de ". $serie." kilohmios";
       echo "<br>";
       echo "<br>";
       echo"<br/> &nbsp; El del capacitador en paralelo  es de ". $pareleo." kilohmios";
       echo "<br>";
       echo "<br>";       echo "<br>";
       echo "<br>";
       echo' <a class="btn btn-primary" href="index.html">Regresar</a>';
?>
</center>
</body>
</html>