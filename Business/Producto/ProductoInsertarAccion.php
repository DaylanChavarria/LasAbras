<?php

	include './ProductoBusiness.php';
	include '../Validaciones.php';

	$instValidaciones = new Validaciones();

	$resultValidaRecibidos = $instValidaciones->validaRecibidos( 
		array('precio', 'nombreEs', 'descripcionEs', 'nombreIn','descripcionIn'));

	/*Si se recibieron todos los datos esperados*/
	if ($resultValidaRecibidos) {
		$precio = $_POST['precio'];	//Solo es un precio

		$nombreEs = $_POST['nombreEs'];
		$descripcionEs = $_POST['descripcionEs'];

		$nombreIn = $_POST['nombreIn'];
		$descripcionIn = $_POST['descripcionIn'];
		/*
		* Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
		* datos no numericos en campos numericos. 
		*/

		//Se hace el llamado a la funcion que valida campos vacios.
		$resultValidaVacios = $instValidaciones->validaVacios(array($nombreEs, $precio, $descripcionEs,
			$nombreIn, $descripcionIn));
			
		//Se hace el llamado a la funcion que valida campos numericos.	
		$resultValidaNumericos = $instValidaciones->validaNumericos(array($precio));

		//Se interpretan los resultados de las validaciones.
		if(!$resultValidaVacios){
			header("location: ../../Presentation/Admin/CRUD_Producto.php?msg=Todos los datos deben ser ingresados.");
		}elseif (!$resultValidaNumericos) {
			header("location: ../../Presentation/Admin/CRUD_Producto.php?msg=ERROR de formato, asegurese de ingresar solo numeros en los campos numericos.");
		}else{
			/*Si se recibieron todos los datos y  ninguno esta vacio*/
			$productoEs = new Producto(0, $nombreEs, $precio, $descripcionEs, 0);
			$productoIn = new Producto(0, $nombreIn, $precio, $descripcionIn, 1);

			$instBusiness = new ProductoBusiness();
			$result = $instBusiness->insertProductoBusiness($productoEs, $productoIn);
			header("location: ../../Presentation/Admin/CRUD_Producto.php?msg=Inserción realizada con exito");
		}
	}
	else header("location: ../../Presentation/Admin/CRUD_Producto.php?msg=No se recibieron todos los datos esperados");

?>