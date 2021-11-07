<?php
/*
 CLASE PARA LA GESTION DE LOS UNIVERSITARIOS
*/
require_once "db.class.php";

class user extends database {

	/* REALIZA UNA CONSULTA A LA BASE DE DATOS EN BUSCA DE  REGISTROS UNIVERSITARIOS DADOS COMO
	     PARAMETROS LA "CARRERA" Y LA "CANTIDAD" DE REGISTROS A MOSTRAR
		 INPUT:
		 $carrera | nombre de la carrera a buscar
		 $limit | cantidad de registros a mostrar
		 OUTPUT:
		 $data | Array con los registros obtenidos, si no existen datos, su valor es una cadena vacia
	 */
	function login($name, $password)
	{
		//conexion a la base de datos
		$this->conectar();	
		$query = $this->consulta("SELECT * FROM users WHERE name='$name' and password='$password' LIMIT  1");
		$this->disconnect();		
		return $query;				
	}
	
}

?>