<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of empleados
 *
 * @author ruifeme
 */
class empleados
{
    //put your code here
    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'Northwind';
        
        mysql_connect('dbhost', 'dbuser', 'dbpass');
        
        mysql_select_db($dbname);
    }
    
    public function buscarEmpleado($nombreEmpleado){
        $datos = array();
        
        $sql = "SELECT * FROM employees
                WHERE FirstName LIKE '% $nombreEmpleado %'
                OR LastName LIKE '%$nombreEmpleado%'";
        
        $resultado = mysql_query($sql);
        
        while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
            $datos[] = array("value" => $row['FistName'] . ' ' . $row['LastName'],
                             "Title" => $row['Title'],
                             "Foto"  => $row['PhotoPath']
                );
        }
        
        return $datos;
    }
}

?>
