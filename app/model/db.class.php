<?php
/*
CLASE PARA LA CONEXION Y LA GESTION DE LA BASE DE DATOS Y LA PAGINA WEB
*/
class database {

 private $conexion;
  
    /* METODO PARA CONECTAR CON LA BASE DE DATOS*/
	public function conectar()
	{
		if(!isset($this->conexion))
		{
			$mysqli = new mysqli('127.0.0.1', 'root', '', 'prueba');
			$mysqli->set_charset("utf8");
		  $this->conexion = $mysqli;			
		}
	}	

	 /* METODO PARA REALIZAR UNA CONSULTA 
		INPUT:
		$sql | codigo sql para ejecutar  la consulta
		OUTPUT: $result
	*/
	public function consulta($sql)
	{
			$resultado = $this->conexion->query($sql);
			return $resultado->fetch_array();
	}
	
	/*METODO PARA CONTAR EL NUMERO DE RESULTADOS
		INPUT: $result
		OUTPUT:  cantidad de registros encontrados
	*/
	function numero_de_filas($result){
	//	if(!is_resource($result)) return false;
		return 5;
	}
	
	/*METODO PARA CREAR ARRAY DESDE UNA CONSULTA
		INPUT: $result
		OUTPUT: array con los resultados de una consulta
	*/
	function fetch_assoc($result){
		return $result->fetch_object();
	}
	
     /* METODO PARA CERRAR LA CONEXION A LA BASE DE DATOS */	
	public function disconnect()
	{
		$this->conexion->close();
	}
	
}
?>