<?php 
	/**
	* Clase destinada a todo lo referente a validaciones.
	*/
	class Validaciones
	{
		
		/*
		* Valida que se reciban por GET o por POST todos los datos deseados
		* Retorna true si todos los datos son recibidos.
		*/
		public function validaRecibidos($arrayVar){
			foreach ($arrayVar as $tem) {
				if ( !isset($_GET[$tem]) && !isset($_POST[$tem])) {
					return false;
				}
			}
			return true;
		}

		/* 
		* Valida que los datos no esten vacios
		* Retorna true si ningun dato est vacio
		*/
		public function validaVacios($arrayVar){
			foreach ($arrayVar as $tem) {
				if (trim($tem) == '') {
					return false;
				}
			}
			return true;
		}

		/*
		* Valida que los datos ingresados sean numericos
		* Retorna true si todos los datos son numericos
		*/
		public function validaNumericos($arrayVar){
			foreach ($arrayVar as $tem) {
				if ((filter_var(trim($tem), FILTER_VALIDATE_INT)) === false) {
					return false;
				}
			}
			return true;
		}
	}

?>