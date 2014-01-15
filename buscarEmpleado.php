<?php

$conexion = new mysqli('localhost','root','','Northwind',3306);
$nombre = $_GET['term'];
$consulta = "SELECT CONCAT(FirstName, ' ', LastName) as Nombre FROM northwind.employees
             WHERE FirstName like '%$nombre%' OR LastName like '%$nombre%'";

$result = $conexion->query($consulta);

if($result->num_rows > 0){
	while($fila = $result->fetch_array()){
		$nombres[] = $fila['nombre'];		
	}
	echo json_encode($nombres);
}

?>