<?php
	require 'app/controller/mvc.controller.php';

     //se instancia al controlador 
	$mvc = new mvc_controller();

	if( $_GET['action'] == 'registro' ) //muestra el modulo del buscador
	{	
        echo("=========== step (1) ==============");
			$mvc->consultarUsuario();	
	}
	else //Si no existe GET o POST -> muestra la pagina principal
	{	
		echo("=========== step (2) ==============");
		$mvc->principal();
	}

	

?>