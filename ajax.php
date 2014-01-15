<?php

    include_once 'empleados.class.php';
    
    $empleado = new empleados();
    
    echo json_encode($empleado->buscarEmpleado(_GET('term')));
?>
