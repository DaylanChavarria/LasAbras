<?php
include '../../Domain/Producto.php';
include 'Data.php';
/**
* Clase encargada de realizar las consultas en la Base de Datos relacionadas a Productos 
*/
class ProductoData extends Data
{

	/*
	* ************* Metodos especificos *************
	*/ 

	//Obtener
	function obtenerProductosEsData(){
		return $this->obtenerProductosData(0);
	}

	function obtenerProductosInData(){
		return $this->obtenerProductosData(1);
	}

	//Actualizar
	function actualizarProductosEsData($producto){
		return $this->actualizarProducto($producto, 0);
	}

	function actualizarProductosInData($producto){
		return $this->actualizarProducto($producto, 1);
	}


	/*
	* ************* Metodos generales *************
	*/ 

	//Obtener
	private function obtenerProductosData($idioma){
		$conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call ObtenerTodosProductos(". $idioma .")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $miProducto = new  Producto($row['atId'], $row['atNombre'],
            $row['atPrecio'], $row['atDescripcion'], $row['atIdioma'], $row['atcodigoProducto']);
            array_push($array, $miProducto);
        }
        return $array;
	}

	//Actualizar
	private function actualizarProducto($producto, $idioma){
		$conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $query = "call ActualizarProducto('".$producto->nombre."', ". $producto->precio .",'". 
        	$producto->descripcion."', ". $idioma .", ". $producto->codigoProducto .")";

        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
	}

	//Insercion es solo una general, por ende no es publico ya que no tiene metodos especificos.
	function insertProductoData($productoEs, $productoIn){
		$conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        /*Primero se obtiene el nuevo codigo de producto*/
        $resultCodigo = mysqli_query($conn, "select max(atcodigoProducto) from la_productos");
        $codigoProducto = (mysqli_fetch_array($resultCodigo)[0])+1;

        $queryEs = "call InsertarProducto(".$productoEs->id.", '". $productoEs->nombre ."',". 
        	$productoEs->precio.", '". $productoEs->descripcion ."', ". $productoEs->idioma .", ". $codigoProducto .")";

		$queryIn = "call InsertarProducto(".$productoIn->id.", '". $productoIn->nombre ."',". 
        	$productoIn->precio.", '". $productoIn->descripcion ."', ". $productoIn->idioma .", ". $codigoProducto .")";

        $result = mysqli_query($conn, $queryEs);
        $result = mysqli_query($conn, $queryIn);
        mysqli_close($conn);
        return $result;
	}
	
}
?>