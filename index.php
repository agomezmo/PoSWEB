<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
   		<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
        <script>
	       	$(document).ready(function(){ 	
				$( "#nombre" ).autocomplete({
      				source: "buscarEmpleado.php",
                                minLength: 1
    			});
		});
        </script>
                    
    </head>
    <body>
        
       	<form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value=""/>
        </form>
    </body>
</html>
