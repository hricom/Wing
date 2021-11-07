<?php
	require 'app/controller/mvc.controller.php';

     //se instancia al controlador 
	$mvc = new mvc_controller();

	if( $_POST['user']  && $_POST['password']  ) //muestra el modulo del buscador
	{	
			$name=$_POST['user'];
			$password=$_POST['password'];
			$mvc->consultarUsuario($name,$password);	
	}
	else //Si no existe GET o POST -> muestra la pagina principal
	{	
		echo("=========== step (2) ==============");
		$mvc->principal();
	}

	

?>