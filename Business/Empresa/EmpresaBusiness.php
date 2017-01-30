<?php
include '../../Data/EmpresaData.php';
/**
* Clase en capa Business destina a conectar la capa
* de presentacion con la capa Data
*/
class EmpresaBusiness extends EmpresaData
{
	/*Obtiene todos los datos de la empresa en español*/
	function getEmpresaEsBusiness()
	{
		return $this->getEmpresaEsData();
	}

	/*Obtiene todos los datos de la empresa en ingles*/
	function getEmpresaInBusiness()
	{
		return $this->getEmpresaInData();
	}

	/*Obtiene todos los datos de la empresa en español*/
	function actualizaEmpresaEsBusiness($empresa)
	{
		return $this->actualizaEmpresaEsData($empresa);
	}

	/*Obtiene todos los datos de la empresa en ingles*/
	function actualizaEmpresaInBusiness($empresa)
	{
		return $this->actualizaEmpresaInBusiness($empresa);
	}

	/* Valida que los datos no esten vacios*/
	public function validateEmpty($arrayVar){
		foreach ($arrayVar as $tem) {
			if (trim($tem) == '') {
				return false;
			}
		}
		return true;
	}

	/*Valida que los datos ingresados sean numericos*/
	public function validateNumeric($arrayVar){
		foreach ($arrayVar as $tem) {
			if ((filter_var(trim($tem), FILTER_VALIDATE_INT)) === false) {
				return false;
			}
		}
		return true;
	}
}
?>