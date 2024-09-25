<?php
require_once './config/Validaciones.php';

/**
 * ControladorPaginas
 */
class ControladorPaginas
{

	/**
	 * M�todo que llama a la acci�n inicio
	 */
	public function inicio()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		require './views/inicio.php';
	}
	
	/**
	 * M�todo para cargar la p�gina de error 404
	 */
	public function page404()
	{
		if(isset($_SESSION['error']) && $_SESSION['error'] != 0) {
			$params['error'] = $_SESSION['error'];
			$_SESSION['error'] = 0;
		} else {
			$params['error'] = 0;
		}
		
		require './views/page404.php';
	}

}