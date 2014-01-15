<?php
	
	$conexion = new mysqli('localhost','root','','Northwind',3306);
	$matricula = $_POST['matricula'];
	$consulta = "select FirstName, LastName, Title FROM northwind.employees WHERE EmployeeID = $matricula";

	$result = $conexion->query($consulta);
	
	$respuesta = new stdClass();
	if($result->num_rows > 0){
		$fila = $result->fetch_array();
		$respuesta->nombre = $fila['FirstName'];
		$respuesta->paterno = $fila['LastName'];
		$respuesta->materno = $fila['Title'];		
	}
	echo json_encode($respuesta);

?>