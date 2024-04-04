<html>
<head>
</head>
<body>
<?php
	echo "EN PANTALLA CON ECHO";
	$dato = $_POST["dato"];
	echo "</br>";
	echo $dato;
	echo "</br></br>";
	echo "EN PANTALLA CON VARDUMP";
	echo "</br>";
	var_dump($dato);
	echo "</br></br>";
	echo "EN PANTALLA CON VARDUMP";
	$dato_entero = (int)$dato;
	echo "</br>";
	var_dump($dato_entero);


?>
</body>
</html>

