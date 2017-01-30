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
}
?>