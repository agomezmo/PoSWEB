<?php

$conexion = new mysqli('localhost','root','','Northwind',3306);
$matricula = $_GET['term'];
$consulta = "select EmployeeID FROM northwind.employees WHERE EmployeeID = $matricula";

$result = $conexion->query($consulta);

if($result->num_rows > 0){
	while($fila = $result->fetch_array()){
		$matriculas[] = $fila['matricula'];		
	}
	echo json_encode($matriculas);
}

?>