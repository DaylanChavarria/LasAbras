<?php

	include './ProductoBusiness.php';
	include '../Validaciones.php';

	$instValidaciones = new Validaciones();

	$resultValidaRecibidos = $instValidaciones->validaRecibidos( 
		array('precio', 'nombre', 'descripcion','codigoProducto'));

	/*Si se recibieron todos los datos esperados*/
	if ($resultValidaRecibidos) {
		$precio = $_POST['precio'];	//Solo es un precio
		$codigoProducto = $_POST['codigoProducto'];	//Solo es un codigoProducto

		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		/*
		* Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
		* datos no numericos en campos numericos. 
		*/

		//Se hace el llamado a la funcion que valida campos vacios.
		$resultValidaVacios = $instValidaciones->validaVacios(array($nombre, $precio, $descripcion, $codigoProducto));
			
		//Se hace el llamado a la funcion que valida campos numericos.	
		$resultValidaNumericos = $instValidaciones->validaNumericos(array($precio,$codigoProducto));

		//Se interpretan los resultados de las validaciones.
		if(!$resultValidaVacios){
			header("location: ../../Presentation/Admin/CRUD_Producto.php?msg=Todos los datos deben ser ingresados.");
		}elseif (!$resultValidaNumericos) {
			header("location: ../../Presentation/Admin/CRUD_Producto.php?msg=ERROR de formato, asegurese de ingresar solo numeros en los campos numericos.");
		}else{
			/*Si se recibieron todos los datos y  ninguno esta vacio*/
			$producto = new Producto(0, $nombre, $precio, $descripcion, 0, $codigoProducto);

			$instBusiness = new ProductoBusiness();
			$result = $instBusiness->actualizarProductosEsBusiness($producto);
			header("location: ../../Presentation/Admin/CRUD_Producto.php?msg=Actualizacion realizada con exito");
		}
	}
	else header("location: ../../Presentation/Admin/CRUD_Producto.php?msg=No se recibieron todos los datos esperados");

?>