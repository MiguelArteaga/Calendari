<!DOCTYPE html>
<html>
<head>
	<title>Calendari</title>
	<link rel="stylesheet" type="text/css" href="calendari.css" />
</head>
<body>
<h1>CALENDARIO</h1>
<?php 
$lista= array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo' ); 
$fi=7;
$col=5;
$contador=1;
$dia=date(d);
echo"<table border=2px; height='500' width='900'>";
echo "<tr>";
foreach ($lista as $l) {
	echo "<td>$l";
	echo "</td>";
}
for($j=0;$j<$col;$j++){
	echo "<tr>";
	for ($o=0;$o<$fi;$o++){
		if ($contador<=31){
			echo "<td>$contador";
			echo "</td>";
		}
		$contador++;
		
		
	}
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>