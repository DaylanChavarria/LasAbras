<?php 
include '../../Data/ProductoData.php';

/**
* Clase encargada de conectar la capa de presentacion con la capa de
* Datos, relacionada a Productos.
*/
class ProductoBusiness extends ProductoData
{
	//*******Obtener Productos******
	function obtenerProductosEsBusiness()
	{
		return $this->obtenerProductosEsData();
	}

	function obtenerProductosInBusiness()
	{
		return $this->obtenerProductosInData();
	}

	//******Actualizar Productos*****
	function actualizarProductosEsBusiness($producto)
	{
		return $this->actualizarProductosEsData($producto);
	}

	function actualizarProductosInBusiness($producto)
	{
		return $this->actualizarProductosInData($producto);
	}

	//*********Insertar Productos*********
	function insertProductoBusiness($productoEs, $productoIn){
		return $this->insertProductoData($productoEs, $productoIn);
	}
}
?>