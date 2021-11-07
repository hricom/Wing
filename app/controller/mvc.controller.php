<?php

require 'app/model/user.class.php';

class mvc_controller
{
    function consultarUsuario($name, $password)
    {
			$user = new user();
			if($name!="" && $password!=""){
				$isLogoin=$user->login($name, $password);
				if($isLogoin!=null){
					$html = $this->load_page('app/views/modules/admin.php');
					$this->view_page($html);
				}else{
					$html = $this->load_page('app/views/modules/registro.php');
					$this->view_page($html);
				}
			}
        $buscador = $this->load_page('app/views/modules/m.buscador.php');
    }




     /* METODO QUE MUESTRA LA PAGINA PRINCIPAL CUANDO NO EXISTEN NUEVAS ORDENES
   OUTPUT
   HTML | codigo html de la pagina   
   */
   function principal()
   {
		// $pagina=$this->load_template('Pagina Principal MVC');				
		$html = $this->load_page('app/views/modules/index.php');
		// $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
		$this->view_page($html);
   }

   /* METODO QUE ESCRIBE EL CODIGO PARA QUE SEA VISTO POR EL USUARIO
		INPUT
		$html | codigo html
		OUTPUT
		HTML | codigo html		
	*/
	private function view_page($html)
	{
		echo $html;
	}
    /* METODO QUE CARGA UNA PAGINA DE LA SECCION VIEW Y LA MANTIENE EN MEMORIA
		INPUT
		$page | direccion de la pagina 
		OUTPUT
		STRING | devuelve un string con el codigo html cargado
	*/	
	private function load_page($page)
	{
		return file_get_contents($page);
	}
}
?>